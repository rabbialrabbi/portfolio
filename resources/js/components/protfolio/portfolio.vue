<template>
    <div class="container">
        <div class="header_white pb-5">
            <p>PORTFOLIO</p>
            <div class="u-line"></div>
        </div>

        <div class="row justify-content-md-center no-gutters portfolio_body ">

            <portion v-for="portfolio in portfolioInfo" :key="portfolio.imgLinks" :imgLink="portfolio.imgLinks" >
                <h6 slot="skill">{{portfolio.skills}}</h6>
            </portion>

<!--            <portion imgLink="image/lov_front.jpg">-->
<!--                <h6 slot="skill">HTML/CSS (PSD to HTML)</h6>-->
<!--            </portion>-->
<!--            <portion imgLink="image/admin_front.jpg">-->
<!--                <h6 slot="skill">Laravel/JQuery</h6>-->
<!--            </portion>-->
<!--            <portion imgLink="image/monster_log.jpg">-->
<!--                <h6 slot="skill">Vue.js</h6>-->
<!--            </portion>-->
<!--            <portion imgLink="image/legend_front.jpg">-->
<!--                <h6 slot="skill">HTML/CSS (PSD to HTML)</h6>-->
<!--            </portion>-->


<!--            <div class="portfolio_img col-sm-4">-->
<!--                <img v-if="!hoverStatus" @mouseover="hoverStatus=!hoverStatus" @mouseleave="hoverStatus=!hoverStatus" width="100%" height="100%" src="image/lov_front.jpg" alt="lov_front">-->
<!--                <div v-if="hoverStatus" @mouseover="hoverStatus=!hoverStatus" @mouseleave="hoverStatus=!hoverStatus" class="d-none" style="width: 100%;height: 100%">-->
<!--                    <h5>Tool Used to build</h5>-->
<!--                    <h6>HTML/CSS (PSD to HTML)</h6>-->
<!--                    <button onclick='window.open("https://rabbialrabbi.github.io/Lovinflat","_blank")'>Show More</button>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="portfolio_img col-sm-4">-->
<!--                <img width="100%" height="100%" src="image/admin_front.jpg" alt="admin_front">-->
<!--                <div class="d-none" style="width: 100%;height: 100%">-->
<!--                    <h5>Tool Used to build</h5>-->
<!--                    <h6>Laravel/JQuery</h6>-->
<!--                    <button onclick="window.open('http://khamarbari.herokuapp.com/','_blank')" >Show More</button>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="portfolio_img col-sm-4">-->
<!--                <img width="100%" height="100%" src="image/monster_log.jpg" alt="monster_log">-->
<!--                <div class="d-none" style="width: 100%;height: 100%">-->
<!--                    <h5>Tool Used to build</h5>-->
<!--                    <h6>Vue.js</h6>-->
<!--                    <button onclick="window.open('https://monsterbite.herokuapp.com/','_blank')">Show More</button>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="portfolio_img col-sm-4">-->
<!--                <img width="100%" height="100%" src="image/legend_front.jpg" alt="legend_front">-->
<!--                <div class="d-none" style="width: 100%;height: 100%">-->
<!--                    <h5>Tool Used to build</h5>-->
<!--                    <h6>HTML/CSS (PSD to HTML)</h6>-->
<!--                    <button onclick="window.open('https://rabbialrabbi.github.io/legend','_blank')">Show More</button>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</template>

<script>
    import portion from "./portion";
    export default {
        name: "portfolio",
        data(){
            return {
                // showModal:false,
                hoverStatus :false,
                portfolioInfo :[
                    {imgLinks:'image/ticket_front.jpg',skills: 'Laravel/Vue.js',},
                    {imgLinks:'image/lov_front.jpg',skills: 'HTML/CSS (PSD to HTML)',},
                    {imgLinks:'image/admin_front.jpg',skills: 'Laravel/JQuery',},
                    {imgLinks:'image/monster_log.jpg',skills: 'Vue.js',},
                    {imgLinks:'image/legend_front.jpg',skills: 'HTML/CSS (PSD to HTML)',},
                ],
            }
        },
        components:{
            portion
        }
    }
</script>

<style scoped>

</style>
