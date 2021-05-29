<template>
    <section id="skill" class="skill">
        <div class="container">
            <div class="header pb-5">
                <p>ABOUT</p>
                <div class="u-line"></div>
            </div>

            <div class="row">
                <skill-parameter></skill-parameter>
                <skill-search></skill-search>
            </div>
        </div>
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1920 80" style="enable-background:new 0 0 1920 80;" xml:space="preserve">
                <polygon points="0,0 960,39.6 1920,80 0,80 "/>
            </svg>
    </section>
</template>

<script>
    import skillSearch from "../../../components/profile/skill-search";
    import skillParameter from "../../../components/profile/skillParameter";

    export default {
        name: "SkillComponent",
        components:{
            skillSearch,
            skillParameter,
        }
    }
</script>

<style scoped>

</style>
