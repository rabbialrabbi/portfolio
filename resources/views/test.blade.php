<!DOCTYPE html>
<html>
<head>
    <title>Modal Component</title>
    <script src="https://unpkg.com/vue"></script>
    <style>
        .modal-mask {
            position: fixed;
            z-index: 9998;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: table;
            transition: opacity 0.3s ease;
        }

        .modal-wrapper {
            display: table-cell;
            vertical-align: middle;
        }

        .modal-container {
            width: 300px;
            margin: 0px auto;
            padding: 20px 30px;
            background-color: #fff;
            border-radius: 2px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.33);
            transition: all 0.3s ease;
            font-family: Helvetica, Arial, sans-serif;
        }

        .modal-header h3 {
            margin-top: 0;
            color: #42b983;
        }

        .modal-body {
            margin: 20px 0;
        }

        .modal-default-button {
            float: right;
        }

        /*
         * The following styles are auto-applied to elements with
         * transition="modal" when their visibility is toggled
         * by Vue.js.
         *
         * You can easily play with the modal transition by editing
         * these styles.
         */

        .modal-enter {
            opacity: 0;
        }

        .modal-leave-active {
            opacity: 0;
        }

        .modal-enter .modal-container,
        .modal-leave-active .modal-container {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

    </style>
    <!-- template for the modal component -->
    <script type="text/x-template" id="modal-template">
        <transition name="modal">

        </transition>
    </script>
</head>
<body>
<!-- app -->
<div id="app">
    <button id="show-modal" @click="showModal = true">Show Modal</button>
    <!-- use the modal component, pass in the prop -->
    <div class="modal-mask" v-if="showModal" @close="showModal = false">
        <div class="modal-wrapper">
            <div class="modal-container">

                <div class="modal-header">
                    <h3 name="header">
                        default header
                    </h3>
                </div>

                <div class="modal-body">
                    <h4 name="body">
                        default body
                    </h4>
                </div>

                <div class="modal-footer">
                    <slot name="footer">
                        default footer
                        <button class="modal-default-button" @click="$emit('close')">
                            OK
                        </button>
                    </slot>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // register modal component
    Vue.component("modal", {
        template: "#modal-template"
    });

    // start app
    new Vue({
        el: "#app",
        data: {
            showModal: false
        }
    });
</script>
</body>
</html>
