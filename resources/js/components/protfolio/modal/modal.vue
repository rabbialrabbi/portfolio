<template>
    <div class="modal-mask">
        <div class="modal-wrapper">
            <div class="modal-container">
                <swiper ref="mySwiper" :options="swiperOptions">
                    <swiper-slide v-for="image in images" :key="image">
                        <img width="600px" height="400px" :src="image" :alt="image">

                    </swiper-slide>
                    <div class="swiper-pagination" slot="pagination"></div>
                </swiper>
                <div class="modal-img_uline"></div>
                <div class="pl-3">
                    <h4>Tools used to build</h4>
                    <ul class="pl-1">
                        <li class="d-inline-block" v-for="skill in info.skills" >{{skill}}</li>
                    </ul>
                </div>
                <div class="pl-3">
                    <h4>Fetchers</h4>
                    <ul class="pl-1">
                        <li class="d-inline-block" v-for="fetcher in info.fetchers" >{{fetcher}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Swiper, SwiperSlide, directive } from 'vue-awesome-swiper'
    // import 'swiper/css/swiper.css'
    export default {
        name: "modal",
        props:['info'],
        data(){
            return {
                images: [
                    'image/ticket_front.jpg',
                    'image/lov_front.jpg',
                    'image/admin_front.jpg',
                    'image/monster_log.jpg'
                ],
                timer: null,
                currentIndex: 0,
                swiperOptions: {
                    pagination: {
                        el: '.swiper-pagination'
                    },
                    autoplay: {
                        delay: 3000,
                    },
                    // Some Swiper option/callback...
                },

            }
        },
        components: {
            Swiper,
            SwiperSlide
        },
        directives: {
            swiper: directive
        }
    }
</script>

<style lang="scss" scoped>
</style>
