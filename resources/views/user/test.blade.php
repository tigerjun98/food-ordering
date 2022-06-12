<style>
    html,
    body {
        height: 100%;
        background: #f6f7fd;
        font-size: 16px;
        overflow: auto;
    }

    .stage {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        padding: 2rem 0;
        margin: 0 -5%;
        overflow: hidden;
    }

    .dot-floating {
        position: relative;
        width: 10px;
        height: 10px;
        border-radius: 5px;
        background-color: #9880ff;
        color: #9880ff;
        animation: dotFloating 3s infinite cubic-bezier(0.15, 0.6, 0.9, 0.1);
    }

    .dot-floating::before, .dot-floating::after {
        content: '';
        display: inline-block;
        position: absolute;
        top: 0;
    }

    .dot-floating::before {
        left: -12px;
        width: 10px;
        height: 10px;
        border-radius: 5px;
        background-color: #9880ff;
        color: #9880ff;
        animation: dotFloatingBefore 3s infinite ease-in-out;
    }

    .dot-floating::after {
        left: -24px;
        width: 10px;
        height: 10px;
        border-radius: 5px;
        background-color: #9880ff;
        color: #9880ff;
        animation: dotFloatingAfter 3s infinite cubic-bezier(0.4, 0, 1, 1);
    }

    @keyframes dotFloating {
        0% {
            left: calc(-50% - 5px);
        }
        75% {
            left: calc(50% + 105px);
        }
        100% {
            left: calc(50% + 105px);
        }
    }

    @keyframes dotFloatingBefore {
        0% {
            left: -50px;
        }
        50% {
            left: -12px;
        }
        75% {
            left: -50px;
        }
        100% {
            left: -50px;
        }
    }

    @keyframes dotFloatingAfter {
        0% {
            left: -100px;
        }
        50% {
            left: -24px;
        }
        75% {
            left: -100px;
        }
        100% {
            left: -100px;
        }
    }

    /*# sourceMappingURL=three-dots.css.map */
</style>

<main>
    <div class="snippet" data-title=".dot-floating">
        <div class="stage">
            <div class="dot-floating"></div>
        </div>
    </div>
</main>
