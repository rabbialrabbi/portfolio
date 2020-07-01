<template>
    <div class="container">
        <div class="header_white pb-5">
            <p>PORTFOLIO</p>
            <div class="u-line"></div>
        </div>

        <div class="row justify-content-md-center no-gutters portfolio_body ">

            <portion v-for="portfolio in portfolioInfo" :key="portfolio.imgLinks" :portfolio="portfolio" >
                <h6 slot="skill">{{portfolio.skills}}</h6>
            </portion>

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
                    {name:'Ticketbd',imgLinks:'image/ticket_front.jpg',skills: 'Laravel/Vue.js',
                        data:{skills:['Laravel, ','Vue.js, ','Chart.js'],fetchers:['User Authentication','Ticket Booking','Dashboard','Shows result in Chart']}
                        },
                    {name:'LovingFlat',imgLinks:'image/lov_front.jpg',skills: 'HTML/CSS (PSD to HTML)',
                        data:{skills:['Laravel, ','Vue.js','Chart.js'],fetchers:['User Authentication','Ticket Booking','Dashboard','Shows result in Chart']}
                        },
                    {name:'Administrative',imgLinks:'image/admin_front.jpg',skills: 'Laravel/JQuery',
                        data:{skills:['Laravel','Vue.js','Chart.js'],fetchers:['User Authentication','Ticket Booking','Dashboard','Shows result in Chart']}
                    },
                    {name:'MonsterBite',imgLinks:'image/monster_log.jpg',skills: 'Vue.js',
                        data:{skills:['Laravel','Vue.js','Chart.js'],fetchers:['User Authentication','Ticket Booking','Dashboard','Shows result in Chart']}
                    },
                    {name:'Legend ',imgLinks:'image/legend_front.jpg',skills: 'HTML/CSS (PSD to HTML)',
                        data:{skills:['Laravel','Vue.js','Chart.js'],fetchers:['User Authentication','Ticket Booking','Dashboard','Shows result in Chart']}
                    },
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
