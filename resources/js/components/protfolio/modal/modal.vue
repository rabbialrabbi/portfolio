<template>
    <div class="modal-mask">
        <div class="modal-wrapper">
            <div class="modal-container">
                <swiper ref="mySwiper" :options="swiperOptions">
                    <swiper-slide v-for="image in info.link" :key="image">
                        <img width="600px" height="400px" :src="image" :alt="image">
                    </swiper-slide>
                    <div class="swiper-pagination" slot="pagination"></div>
                </swiper>
                <div class="modal-img_uline"></div>
                <div class="modal-text">
                    <div>
                        <h4 class="modal-skill_header">{{name}}</h4>
                        <hr>
                        <ul class="pl-0">
                            <span class="modal-skill_tool">Tools:</span>
                            <li class="modal-skill" v-for="skill in info.skills">{{skill}}</li>
                        </ul>
                    </div>
                    <div class="modal-fetcher" >
                        <h6 class="modal-fetcher_header">Fetchers:</h6>
                        <div class="row pl-3">
                            <div class="col-6 pt-1"  v-for="fetcher in info.fetchers" ><i class="fas fa-star-of-life"></i>{{fetcher}}</div>
                        </div>
                    </div>
                </div>
                <div class="row modal-bottom">
                    <div class="col-6 modal-bottom_button">
                        <button @click="openWindow()" >View Site</button>
                    </div>
                    <div class="col-6 modal-bottom_cross">
                        <i class="fas fa-times" @click="$emit('close')"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    import { Swiper, SwiperSlide, directive } from 'vue-awesome-swiper'

    export default {
        name: "modal",
        props:['info','name'],
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
        methods:{
          openWindow(){
              window.open(this.info.link,'_blank')
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
