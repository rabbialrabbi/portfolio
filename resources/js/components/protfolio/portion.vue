<template>
    <div class="portfolio_img col-sm-4">
        <img v-if="!hoverStatus" @mouseover="hoverStatus=!hoverStatus" width="100%" height="100%" :src="portfolio.imgLinks" alt="ticket_front">
        <div class="portfolio_img-hover" v-if="hoverStatus" @mouseleave="hoverStatus=!hoverStatus"  style="width: 100%;height: 100%">
            <h5>Tool Used to build</h5>
            <slot name="skill"></slot>
            <!--                    <button @onclick='window.open("http://ticketbd.herokuapp.com/","_blank")'>Show More</button>-->
            <button @click='showModal = true'>Show More</button>

        </div>
        <modal v-if="showModal" @close="showModal = false" :info="portfolio.data">
            <h3 slot="header">custom header</h3>
        </modal>
    </div>
</template>

<script>
    export default {
        name: "portion",
        props:['portfolio'],
        data(){
            return{
                hoverStatus: false,
                showModal:false,
            }
        }
    }
</script>

<style scoped>

</style>
