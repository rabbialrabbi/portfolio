<template>
    <div>
        <transition-group name="fade" tag="div">
            <div v-for="i in [currentIndex]" :key="i">
                <div>
                    <img width="400px" height="300px" :src="currentImg" />
                    <a class="prev" @click.prevent="prev" >&#10094; Previous</a>
                    <a class="next" @click.prevent="next" >Next &#10095; </a>
                </div>

                <div class="modal-body" :key="i">
                    <slot name="body">
                        default body
                    </slot>
                </div>

                <div class="modal-footer" :key="i">
                    <slot name="footer">
                        default footer
                        <button class="modal-default-button" @click="$emit('close')">
                            OK
                        </button>
                    </slot>
                </div>
            </div>

        </transition-group>

    </div>
</template>
<script>
    export default {
        name: "Slider",
        data() {
            return {
                images: [
                    'image/ticket_front.jpg',
                    'image/lov_front.jpg',
                    'image/admin_front.jpg',
                    'image/monster_log.jpg'
                    ],
                timer: null,
                currentIndex: 0
            };
        },

        mounted: function() {
            this.startSlide();
        },

        methods: {
            startSlide: function() {
                this.timer = setInterval(this.next, 8000);
            },

            next: function() {
                this.currentIndex += 1;
            },
            prev: function() {
                this.currentIndex -= 1;
            }
        },

        computed: {
            currentImg: function() {
                return this.images[Math.abs(this.currentIndex) % this.images.length];
            }
        }
    };
</script>

<style scoped>
    .fade-enter-active,
    .fade-leave-active {
        transition: all 0.9s ease;
        overflow: hidden;
        visibility: visible;
        position: absolute;
        width:100%;
        opacity: 1;
    }

    .fade-enter,
    .fade-leave-to {
        visibility: hidden;
        width:100%;
        opacity: 0;
    }

    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.7s ease;
        border-radius: 0 4px 4px 0;
        text-decoration: none;
        user-select: none;
    }

    .next {
        right: 0;
    }

    .prev {
        left: 0;
    }

    .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.9);
    }
</style>
