<div class="loading-backdrop"></div>

<style>
    .show-spinner::after {
        content: " ";
        display: inline-block;
        width: 30px;
        height: 30px;
        border: 2px solid rgba(0, 0, 0, 0.2);
        border-radius: 50%;
        border-top-color: #075aa2;
        animation: spin 1s ease-in-out infinite;
        -webkit-animation: spin 1s ease-in-out infinite;
        left: calc(50% - 15px);
        top: 50%;
        position: fixed;
        z-index: 10000;
    }

    .loading-backdrop{
        position: fixed;
        width: 100vw;
        height: 100vh;
        background: #85555500;
        z-index: 9999;
        display: none;
    }
    .show-spinner .loading-backdrop{
        display: block;
    }

    @-moz-keyframes spin {
        from { -moz-transform: rotate(0deg); }
        to { -moz-transform: rotate(360deg); }
    }
    @-webkit-keyframes spin {
        from { -webkit-transform: rotate(0deg); }
        to { -webkit-transform: rotate(360deg); }
    }
    @keyframes spin {
        from {transform:rotate(0deg);}
        to {transform:rotate(360deg);}
    }

</style>
