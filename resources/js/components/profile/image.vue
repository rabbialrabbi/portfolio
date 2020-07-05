<template>
    <div class="col-sm-4">
        <img :src="'image/'+info.link" :alt="info.link">
    </div>
</template>

<script>
    export default {
        props:['info']
    }
</script>

<style scoped>
.imgBox {
    display: inline;
}
</style>
