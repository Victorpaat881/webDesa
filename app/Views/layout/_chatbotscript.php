<?php $chatbot = new \App\Models\ChatbotModel() ?>
<script>
    var keywords = <?= json_encode(array_column($chatbot->findAll() ?? [], 'keyword'))  ?>;
    var answers = <?= json_encode(array_column($chatbot->findAll() ?? [], 'answer'))  ?>;
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var chatbotContainer = document.getElementById('chatbot-container');
        var chatHeader = document.getElementById('chat-header');
        var chatBody = document.getElementById('chat-body');
        var userInput = document.getElementById('user-input');
        var sendButton = document.getElementById('send-button');
        var recommendButton = document.getElementById('recommend-button');
        var resetButton = document.getElementById('reset-button');
        var chatbotMinimize = document.getElementById('chatbot-minimize');

        var waitingForUserInput = false;

        // Load chat history from cookies
        var chatHistory = getChatHistory();
        for (var i = 0; i < chatHistory.length; i++) {
            appendMessage(chatHistory[i].sender, chatHistory[i].message);
        }

        // Greeting message when the chatbot initializes
        if (chatHistory.length === 0) {
            appendMessage('Chatbot', 'Halo, Selamat datang di Website Desa Tenga. Apa yang bisa kami bantu?');
        }

        chatHeader.addEventListener('click', function() {
            chatbotContainer.classList.toggle('hidden');
            chatbotMinimize.classList.toggle('hidden');
        });
        chatbotMinimize.addEventListener('click', function() {
            chatbotContainer.classList.toggle('hidden');
            chatbotMinimize.classList.toggle('hidden');
        });

        sendButton.addEventListener('click', function() {
            var userMessage = userInput.value.trim();

            if (userMessage !== '') {
                if (userMessage.toLowerCase() === 'clear') {
                    // Clear the chat if the user sends "clear"
                    clearChat();
                } else {
                    appendMessage('You', userMessage);

                    // Answer user's question
                    var botResponse = getBotResponse(userMessage);
                    setInterval(function() {}, 3000);
                    appendMessage('Chatbot', botResponse);

                    // If the bot is waiting for user input, set the flag to true
                    waitingForUserInput = botResponse.includes('Would you like to ask another question?');

                    // If a recommended question is present in the response, set it in the input field
                    var recommendedQuestion = getRecommendedQuestion(botResponse);
                    if (recommendedQuestion) {
                        userInput.value = recommendedQuestion;
                        waitingForUserInput = false; // Reset the flag since the bot suggested a question
                    } else {
                        userInput.value = ''; // Clear the input field if no recommended question
                    }

                    // Save the chat history to cookies
                    saveChatHistory();
                }
            }
        });

        recommendButton.addEventListener('click', function() {
            // You can customize the recommended questions based on your needs
            var recommendedQuestions = [
                'Saya ingin Mengetahui mengenai pemerintahan di Desa Tenga',
                'Saya ingin Mengetahui mengenai Kepala desa di Desa Tenga.',
                'Saya ingin Mengetahui mengenai Sekretaris di Desa Tenga.',
                'Saya ingin Mengetahui mengenai Kepala Jaga di Desa Tenga.',
                'Saya ingin Mengetahui mengenai Kasi di Desa Tenga.',
                'Saya ingin Mengetahui mengenai Kaur di Desa Tenga.',
                'Saya ingin Mengetahui mengenai Syarat Pembuatan Surat.',
            ];

            // Display recommended questions in the chat\
            let idx = Math.floor(Math.random() * recommendedQuestions.length);
            appendRecommendedQuestion(recommendedQuestions[idx]);

            // Save the chat history to cookies
            saveChatHistory();
        });

        resetButton.addEventListener('click', function() {
            resetChatHistory();
        })

        function appendMessage(sender, message) {
            var messageElement = document.createElement('div');
            if (sender.toLowerCase() == 'chatbot') {
                messageElement.classList.add('chat-chatbot');
            } else {
                messageElement.classList.add('chat-user');
            }
            messageElement.innerHTML = '<strong class="sender">' + sender + ':</strong> ' + message;
            chatBody.appendChild(messageElement);
            chatBody.scrollTop = chatBody.scrollHeight;
        }

        function appendRecommendedQuestion(question) {
            userInput.value = question;
        }

        function clearChat() {
            // Clear the chat history and update the UI
            chatBody.innerHTML = '';
            userInput.value = '';
            waitingForUserInput = false;

            // Save the chat history to cookies
            saveChatHistory();
        }

        function getBotResponse(userMessage) {
            // Simple logic for responding to specific questions
            // Ask another question after responding to the products query
            // if (userMessage.toLowerCase().includes('hello') || userMessage.toLowerCase().includes('halo') || userMessage.toLowerCase().includes('helo')) {
            //     return 'Hai, Selamat Datang di website Desa Tenga';
            // } else if (userMessage.toLowerCase().includes('pemerintahan')) {
            //     return 'Jelaskan apa yang ingin diketahui dari pemerintahan di desa tenga (kepala desa, sekretaris desa, kepala jaga, dll)';
            // } else if (userMessage.toLowerCase().includes('kepala desa')) {
            //     return 'untuk Kepala desa yang bertugas sekarang adalah Hendro Pijoh, S.H';
            // } else if (userMessage.toLowerCase().includes('sekretaris desa')) {
            //     return 'untuk Sekretaris yang bertugas sekarang adalah <i>Sony Lintong</i>';
            // } else if (userMessage.toLowerCase().includes('kepala jaga')) {
            //     return 'Berikut adalah daftar kepala jaga <ul><li>Kepala Jaga 1 : Fike Pandeirot</li><li>Staf Jaga 1 : Alfa Tumiwa</li></ul><ul><li>Kepala Jaga 2 : Stefen Tumbelaka</li><li>Staf Jaga 2 : Nevi Mukuan </li></ul><ul><li>Kepala Jaga 3 : Rudolf Waroka</li><li>Staf Jaga 3 : Rionaldi Rambitan </li></ul><ul><li>Kepala Jaga 4 : Estet Mungkaren</li><li>Staf Jaga 4 : Yola Kapero </li></ul><ul><li>Kepala Jaga 5 : Modi Tambun</li><li>Staf Jaga 5 : Rita Suak </li></ul><ul><li>Kepala Jaga 6 : Jhonly Sorongan</li><li>Staf Jaga 6 : Kornelius kantu </li></ul><ul><li>Kepala Jaga 7 : Vendi Sugeha</li><li>Staf Jaga 7 : Norma Mungkaren </li></ul><ul><li>Kepala Jaga 8 : Tine Tagah</li><li>Staf Jaga 8 : Ivon Rauung </li></ul>';
            // } else if (userMessage.toLowerCase().includes('nama kasi') || userMessage.toLowerCase().includes('kasi') || userMessage.toLowerCase().includes('kepala seksi')) {
            //     return 'Berikut adalah daftar kepala Seksi <ul><li>Kasi Kesejahteraan : Olga Lengkong</li><li>Kasi Pemerintahan : Oscar Pijoh</li><li>Kasi Pelayanan : Kristifel Timbong</li></ul>';
            // } else if (userMessage.toLowerCase().includes('nama kaur') || userMessage.toLowerCase().includes('kaur') || userMessage.toLowerCase().includes('kepala urusan')) {
            //     return 'Berikut adalah daftar kepala Urusan <ul><li>Kaur perencanaan : Sefan pesik</li><li>Kaur keuangan : Joice Sorongan</li><li>Kaur TU & umum : Fian Ruus</li></ul>'
            // } else {
            //     return 'Pertanyaan masih belum diketahui, silahkan ajukan pertanyaan lain.';
            // }
            let result_answers = 'Pertanyaan masih belum diketahui, silahkan ajukan pertanyaan lain.';
            keywords.forEach((el, idx) => {
                if (userMessage.toLowerCase().includes(el.toLowerCase()) == true) {
                    result_answers = answers[idx];
                };
            });
            return result_answers;
        }

        function getRecommendedQuestion(response) {
            // Extract the recommended question from the response
            var match = response.match(/Would you like to ask another question\?\n(.+)/);
            return match ? match[1] : null;
        }

        function getChatHistory() {
            // Retrieve the chat history from cookies
            var chatHistoryCookie = document.cookie.replace(/(?:(?:^|.*;\s*)chatHistory\s*=\s*([^;]*).*$)|^.*$/, "$1");
            return chatHistoryCookie ? JSON.parse(chatHistoryCookie) : [];
        }

        function saveChatHistory() {
            // Save the chat history to cookies
            var chatHistory = [];
            var chatMessages = chatBody.querySelectorAll('div');
            for (var i = 0; i < chatMessages.length; i++) {
                var sender = chatMessages[i].querySelector('strong').textContent.replace(':', '').trim();
                var message = chatMessages[i].innerHTML.replace(sender + ':', '').trim();
                chatHistory.push({
                    sender: sender,
                    message: message
                });
            }
            document.cookie = 'chatHistory=' + JSON.stringify(chatHistory) + '; path=/';
        }

        function resetChatHistory() {
            // Save the chat history to cookies
            var chatHistory = [];
            document.cookie = 'chatHistory=' + JSON.stringify(chatHistory) + '; path=/';
        }
    });
</script>