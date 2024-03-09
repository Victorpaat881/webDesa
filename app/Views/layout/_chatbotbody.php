<div id="chatbot-container" class="hidden">
    <div id="chat-header" class="section-green">Chatbot</div>
    <div id="chat-body" class=""></div>
    <input type="text" id="user-input" placeholder="Type your message...">
    <button id="send-button" class="section-green">Send</button>
    <div style="display: flex;">
        <button id="reset-button" class="section-green btn text-color-1" style="margin-bottom: 0; color:aliceblue">!</button>
        <button id="recommend-button" class="section-green">Recommended Question</button>
    </div>
</div>
<div class="btn btn-orange-2 dark btn-round" id="chatbot-minimize" style="
    position: fixed;
    z-index: 1000;
    bottom: 21px;
    right: 68px;
    font-size: small;
"><img src="<?= base_url() ?>assets/images/media/chatbot.png" alt="check" style="height: 20px;filter: brightness(2);"> Chatbot</div>