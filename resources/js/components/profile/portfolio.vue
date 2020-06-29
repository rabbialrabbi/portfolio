<template>

</template>

<script>
    import $ from 'jquery';



    console.log('working')

    export default {
        name: "portfolio",
        data(){
          return {
              viewStatus:false,
              imgInfo:[
                  {link:'ticket_front.jpg'},
                  {link:'admin_front.jpg'},
                  {link:'monster_log.jpg'},
                  {link:'lov_front.jpg'},
                  {link:'legend_front.jpg'},
              ]
          }
        },
    }
</script>

<style scoped>

</style>
