<style>
    #chatbot-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 400px;
        max-width: calc(100vw - 50px);
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
        z-index: 10;
    }

    #chat-header {
        color: white;
        padding: 10px;
        text-align: center;
        cursor: pointer;
    }

    #chat-body {
        max-height: 40vh;
        padding: 10px;
        min-height: 200px;
        overflow-y: auto;
        background-color: white;
    }

    #chat-body .chat-chatbot {
        background-color: lavenderblush;
        padding: 10px;
        width: 85%;
        margin-right: auto;
        margin-bottom: 5px;
        border-radius: 10px;
    }

    #chat-body .chat-user {
        background-color: wheat;
        padding: 10px;
        width: 85%;
        margin-left: auto;
        margin-bottom: 5px;
        border-radius: 10px;
    }

    #user-input {
        width: 100%;
        padding: 10px;
        border: none;
        border-top: 1px solid #ccc;
        box-sizing: border-box;
    }

    #send-button,
    #recommend-button {
        width: 100%;
        padding: 10px;
        color: white;
        border: none;
        cursor: pointer;
        box-sizing: border-box;
    }

    #recommend-button {
        background-color: #242424;
    }

    .chatbot-logo {
        border-style: none;
        background-color: #1f243c;
        font-size: 15px;
        color: #fff;
        width: 155px;
        height: 48px;
        box-sizing: border-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        border-radius: 24px;
        font-family: Inter;
        line-height: 100%;
        font-weight: 700;
        padding-left: 10px;
        padding-right: 20px;
        cursor: pointer;
        z-index: 9999;
        box-shadow: 0 2px 8px 0 rgba(0, 0, 0, .2);
    }
</style>