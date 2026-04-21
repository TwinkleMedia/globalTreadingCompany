<!-- WHATSAPP FLOATING BUTTON -->
<!-- Place this just before your closing </body> tag on every page -->
<!-- Replace 919820000000 with your actual WhatsApp number (country code + number, no + or spaces) -->

<style>
    .wa-float {
        position: fixed;
        bottom: 28px;
        right: 28px;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 10px;
        font-family: 'Poppins', sans-serif;
    }

    /* Tooltip bubble */
    .wa-tooltip {
        background: #fff;
        color: #254991;
        font-size: 12px;
        font-weight: 600;
        padding: 8px 14px;
        border-radius: 6px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.12);
        white-space: nowrap;
        opacity: 0;
        transform: translateX(10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
        pointer-events: none;
        border-left: 3px solid #25D366;
    }

    .wa-tooltip::after {
        content: '';
        position: absolute;
        right: -7px;
        top: 50%;
        transform: translateY(-50%);
        border-width: 6px 0 6px 7px;
        border-style: solid;
        border-color: transparent transparent transparent #fff;
    }

    .wa-tooltip {
        position: relative;
    }

    .wa-float:hover .wa-tooltip,
    .wa-float.show-tip .wa-tooltip {
        opacity: 1;
        transform: translateX(0);
    }

    /* Main button */
    .wa-btn {
        width: 58px;
        height: 58px;
        border-radius: 50%;
        background: #25D366;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 20px rgba(37, 211, 102, 0.45);
        text-decoration: none;
        transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
        position: relative;
    }

    .wa-btn:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 28px rgba(37, 211, 102, 0.6);
        background: #1ebe5d;
    }

    .wa-btn:active {
        transform: scale(0.96);
    }

    /* Pulse ring animation */
    .wa-btn::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 50%;
        background: rgba(37, 211, 102, 0.35);
        animation: wa-pulse 2.2s ease-out infinite;
    }

    @keyframes wa-pulse {
        0% {
            transform: scale(1);
            opacity: 0.7;
        }

        70% {
            transform: scale(1.65);
            opacity: 0;
        }

        100% {
            transform: scale(1.65);
            opacity: 0;
        }
    }

    .wa-btn svg {
        width: 30px;
        height: 30px;
        position: relative;
        z-index: 1;
    }

    /* Notification dot */
    .wa-dot {
        position: absolute;
        top: 3px;
        right: 3px;
        width: 12px;
        height: 12px;
        background: #CB5116;
        border-radius: 50%;
        border: 2px solid #fff;
        z-index: 2;
        animation: wa-blink 2s ease-in-out infinite;
    }

    @keyframes wa-blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.3;
        }
    }

    /* Mobile: smaller and closer to edge */
    @media (max-width: 640px) {
        .wa-float {
            bottom: 20px;
            right: 18px;
        }

        .wa-btn {
            width: 52px;
            height: 52px;
        }

        .wa-btn svg {
            width: 26px;
            height: 26px;
        }
    }
</style>

<div class="wa-float" id="waFloat">
    <!-- Tooltip -->
    <div class="wa-tooltip">Chat with us on WhatsApp</div>

    <!-- Button -->
    <a href="https://wa.me/919820000000?text=Hello%2C%20I%20have%20an%20enquiry%20about%20your%20products."
        target="_blank"
        rel="noopener noreferrer"
        class="wa-btn"
        aria-label="Chat on WhatsApp">

        <!-- Notification dot -->
        <span class="wa-dot"></span>

        <!-- WhatsApp SVG Icon -->
        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 2C8.268 2 2 8.268 2 16c0 2.482.669 4.808 1.835 6.808L2 30l7.388-1.808A13.93 13.93 0 0016 30c7.732 0 14-6.268 14-14S23.732 2 16 2z" fill="white" />
            <path d="M22.003 19.663c-.307-.153-1.816-.896-2.097-.998-.281-.102-.486-.153-.69.153-.204.307-.792.998-.971 1.203-.179.204-.358.23-.665.077-.307-.153-1.296-.478-2.468-1.523-.912-.813-1.527-1.817-1.706-2.124-.179-.307-.019-.473.134-.625.138-.137.307-.358.46-.537.154-.18.205-.307.307-.511.102-.204.051-.383-.026-.537-.077-.153-.69-1.663-.945-2.276-.249-.598-.502-.517-.69-.526-.178-.009-.383-.01-.588-.01-.204 0-.537.077-.818.383-.281.307-1.073 1.048-1.073 2.557 0 1.51 1.098 2.968 1.251 3.172.153.204 2.161 3.3 5.237 4.628.732.316 1.303.504 1.748.645.734.233 1.403.2 1.931.121.589-.088 1.816-.742 2.072-1.458.256-.716.256-1.33.179-1.458-.077-.128-.281-.204-.588-.358z" fill="#25D366" />
        </svg>
    </a>
</div>

<script>
    // Auto-show tooltip after 3 seconds, then hide after 5s
    (function() {
        var fl = document.getElementById('waFloat');
        if (!fl) return;
        setTimeout(function() {
            fl.classList.add('show-tip');
            setTimeout(function() {
                fl.classList.remove('show-tip');
            }, 4000);
        }, 3000);
    })();
</script>
<!-- END WHATSAPP FLOATING BUTTON -->