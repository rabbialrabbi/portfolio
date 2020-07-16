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
                        data:{skills:['Laravel, ','Vue.js, ','Chart.js'],fetchers:['User Authentication','Ticket Booking','Dashboard','Shows result in Chart'],
                            link:[
                                    'image/ticket_front.jpg',
                                    'image/ticket_add.jpg',
                                    'image/ticket_chart.jpg',
                                    'image/ticket_body.jpg',
                                ]
                            }
                        },
                    {name:'Medicine Shop',imgLinks:'image/medi_front.jpg',skills: 'Laravel/Vue.js',
                        data:{skills:['Laravel, ','Vue.js, ','bootstrap'],fetchers:['Multi Authentication','Sub E-commerce','Dashboard','Admin Panel','Order','Sales'],
                            link:[
                                'image/medi_front.jpg',
                                'image/medi_list.jpg',
                                'image/medi_input.jpg',
                                'image/medi_view.jpg',
                            ]
                        }
                    },
                    {name:'LovingFlat',imgLinks:'image/lov_front.jpg',skills: 'HTML/CSS (PSD to HTML)',
                        data:{skills:['HTML, ','CSS'],fetchers:['Profile List','Contact','Skills'],
                            link:[
                                'image/lov_front.jpg',
                                'image/lov_skill.jpg',
                                'image/lov_team.jpg',
                                ]
                            }
                        },
                    {name:'Administrative',imgLinks:'image/admin_front.jpg',skills: 'Laravel/JQuery',
                        data:{skills:['Laravel','JQurey','SPA'],fetchers:['Multi Language','Single Page Application','CRUD','Authentication'],
                            link:[
                                'image/admin_front.jpg',
                                'image/admin_filter.jpg',
                                'image/admin_edit.jpg',
                            ]
                        }
                    },
                    {name:'MonsterBite',imgLinks:'image/monster_log.jpg',skills: 'Vue.js',
                        data: {
                            skills: ['Vue.js'],
                            fetchers: ['Simple Game', 'Special Attach', 'Healing'],
                            link: [
                                'image/monster_front.jpg',
                                'image/monster_log.jpg',
                                'image/monster_newgame.jpg',
                            ]
                        }
                    },
                    {name:'Legend ',imgLinks:'image/legend_front.jpg',skills: 'HTML/CSS (PSD to HTML)',
                        data:{skills:['HTML','Vue.js','Chart.js'],fetchers:['Profile List','Contact','Skills'],
                            link: [
                                'image/legend_front.jpg',
                                'image/legend_contact.jpg',
                                'image/legend_portfolio.jpg',
                            ]
                        }
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
