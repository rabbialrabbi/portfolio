<template>
    <div class="modal-mask">
        <div class="modal-wrapper">
            <div class="modal-container">

                <slide-component></slide-component>


            </div>
        </div>
    </div>
</template>

<script>
    import SlideComponent from "./SlideComponent";
    export default {
        name: "modal",
        components:{
          SlideComponent
        },
    }
</script>

<style >

</style>
