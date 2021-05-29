<template>
    <section id="project" class="portfolio">
        <div class="container">
            <div class="header_white pb-5">
                <p>PORTFOLIO</p>
                <div class="u-line"></div>
            </div>

            <div class="row justify-content-md-center no-gutters portfolio_body ">

                <project v-for="(portfolio,index) in portfolioInfo" :key="portfolio.imgLinks" :portfolio="portfolio" :refid="index">

                </project>

            </div>
        </div>
        <svg
            preserveAspectRatio="none"
            viewBox="0 0 100 102"
            height="50"
            width="100%"
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
            class="intro-svg"
        >
            <path d="M0 0 L50 100 L100 0 Z"></path>
        </svg>
    </section>

</template>

<script>
    import project from "./project";

    export default {
        name: "portfolio",
        data() {
            return {
                // showModal:false,
                hoverStatus: false,
                portfolioInfo: [
                    {
                        name: 'Ticketbd',
                        bannerImg: 'image/ticket_front.jpg',
                        skills: 'Laravel/Vue.js',
                        siteUrl: 'http://ticketbd.herokuapp.com/',
                        data: {
                            skills: ['Laravel, ', 'Vue.js, ', 'Chart.js'],
                            fetchers: ['User Authentication', 'Ticket Booking', 'Dashboard', 'Shows result in Chart'],
                            link: [
                                'image/ticket_front.jpg',
                                'image/ticket_add.jpg',
                                'image/ticket_chart.jpg',
                                'image/ticket_body.jpg',
                            ]
                        }
                    },
                    {
                        name: 'Medicine Shop',
                        bannerImg: 'image/medi_front.jpg',
                        skills: 'Laravel/Vue.js',
                        siteUrl: 'http://klu-bd.com/',
                        data: {
                            skills: ['Laravel, ', 'Vue.js, ', 'bootstrap'],
                            fetchers: ['Multi Authentication', 'Sub E-commerce', 'Dashboard', 'Admin Panel', 'Order', 'Sales'],
                            link: [
                                'image/medi_front.jpg',
                                'image/medi_list.jpg',
                                'image/medi_input.jpg',
                                'image/medi_view.jpg',
                            ]
                        }
                    },
                    {
                        name: 'LovingFlat',
                        bannerImg: 'image/lov_front.jpg',
                        skills: 'HTML/CSS (PSD to HTML)',
                        siteUrl: 'https://rabbialrabbi.github.io/Lovinflat/',
                        data: {
                            skills: ['HTML, ', 'CSS'], fetchers: ['Profile List', 'Contact', 'Skills'],
                            link: [
                                'image/lov_front.jpg',
                                // 'image/lov_skill.jpg',
                                'image/lov_team.jpg',
                            ]
                        }
                    },
                    {
                        name: 'Administrative',
                        bannerImg: 'image/admin_front.jpg',
                        skills: 'Laravel/JQuery',
                        siteUrl: 'http://khamarbari.herokuapp.com/division',
                        data: {
                            skills: ['Laravel', 'JQurey', 'SPA'],
                            fetchers: ['Multi Language', 'Single Page Application', 'CRUD', 'Authentication'],
                            link: [
                                'image/admin_front.jpg',
                                'image/admin_filter.jpg',
                                'image/admin_edit.jpg',
                            ]
                        }
                    },
                    {
                        name: 'MonsterBite',
                        bannerImg: 'image/monster_log.jpg',
                        skills: 'Vue.js',
                        siteUrl: 'forbiden',
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
                    {
                        name: 'Legend ',
                        bannerImg: 'image/legend_front.jpg',
                        skills: 'HTML/CSS (PSD to HTML)',
                        siteUrl: 'https://rabbialrabbi.github.io/legend/',
                        data: {
                            skills: ['HTML', 'Vue.js', 'Chart.js'], fetchers: ['Profile List', 'Contact', 'Skills'],
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
        components: {
            project
        }
    }
</script>

<style scoped>

</style>
