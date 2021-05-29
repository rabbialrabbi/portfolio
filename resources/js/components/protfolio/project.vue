<template>
    <div class="portfolio_img col-sm-4">

        <img v-show="!hoverStatus" @mouseover="hoverStatus=!hoverStatus" width="100%" height="100%" :src="portfolio.bannerImg" alt="ticket_front">
        <div class="portfolio_img-hover" v-if="hoverStatus" @mouseleave="hoverStatus=!hoverStatus"  style="max-width: 100%;height: 100%">
            <h5>Tool Used to build</h5>
            <h6 slot="skill">{{portfolio.skills}}</h6>
            <!--                    <button @onclick='window.open("http://ticketbd.herokuapp.com/","_blank")'>Show More</button>-->
<!--            <button @click='showModal = true'>Show More</button>-->
            <a href="#" class="btn btn-lg btn-primary mt-4" data-toggle="modal" :data-target="'#modal'+refid">Show More</a>
        </div>
        <div class="modal fade" :id="'modal'+refid" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- carousel -->
                        <div
                            :id="'slide'+refid"
                            class='carousel slide'
                            data-ride='carousel'
                        >
                            <ol class='carousel-indicators'>
                                <li
                                    :data-target="'#slide'+refid"
                                    :data-slide-to='index'
                                    class='active'
                                    v-for="(image, index) in portfolio.data.link"
                                ></li>
                            </ol>
                            <div class='carousel-inner'>
<!--                                <div class='carousel-item active'>-->
<!--                                    <img class='img-size' :src='portfolio.data.link[0]' />-->
<!--                                </div>-->
                                <div class='carousel-item' :class="index === 0? 'active':''" v-for="(image,index) in portfolio.data.link">
                                    <img class='img-size' :src='image' />
                                </div>
                            </div>
                            <a
                                class='carousel-control-prev'
                                :href="'#slide'+refid"
                                role='button'
                                data-slide='prev'
                            >
              <span class='carousel-control-prev-icon'
                    aria-hidden='true'
              ></span>
                                <span class='sr-only'>Previous</span>
                            </a>
                            <a
                                class='carousel-control-next'
                                :href="'#slide'+refid"
                                role='button'
                                data-slide='next'
                            >
              <span
                  class='carousel-control-next-icon'
                  aria-hidden='true'
              ></span>
                                <span class='sr-only'>Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="modal-img_uline"></div>
                    <div class="modal-text">
                        <div>
                            <h4 class="modal-skill_header">{{portfolio.name}}</h4>
                            <hr>
                            <ul class="pl-0">
                                <span class="modal-skill_tool">Tools:</span>
                                <li class="modal-skill" v-for="skill in portfolio.data.skills">{{skill}}</li>
                            </ul>
                        </div>
                        <div class="modal-fetcher" >
                            <h6 class="modal-fetcher_header">Fetchers:</h6>
                            <div class="row pl-3">
                                <div class="col-6 pt-1"  v-for="fetcher in portfolio.data.fetchers" ><i class="fas fa-star-of-life"></i>{{fetcher}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer modal-bottom_cross justify-content-between">
                        <div class="modal-bottom_button">
                            <button @click="openWindow()" >View Site</button>
                        </div>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>


<!--        <modal v-if="showModal" @close="showModal = false" :info="portfolio.data" :name="portfolio.name">-->
<!--            <h3 slot="header">custom header</h3>-->
<!--        </modal>-->

    </div>
</template>

<script>
    import { Swiper, SwiperSlide, directive } from 'vue-awesome-swiper'
    export default {
        name: "project",
        props:['portfolio','refid'],
        data(){
            return{
                hoverStatus: false,
                showModal:false,
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
                window.open(this.portfolio.siteUrl,'_blank')
            },

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

<style scoped>
    .img-size{
        /* 	padding: 0;
            margin: 0; */
        height: 450px;
        max-width: 100%;
        background-size: cover;
        overflow: hidden;
    }
    .modal-content {
        max-width: 100%;
        border:none;
    }
    .modal-body {
        padding: 0;
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23009be1' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
        max-width: 30px;
        height: 48px;
    }
    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23009be1' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
        max-width: 30px;
        height: 48px;
    }
    .carousel-indicators li{
        background-color: black;
    }
</style>
