<template>
    <div class="col-sm-6 skill_parameter">
        <h4>Skills</h4>
        <div v-for="skill in skills">
            <p>{{skill.tool}} ({{skill.score}}%)</p>
            <div class="skill_parameter-body">
                <div class="skill_parameter-fill" :style="{width:skill.score+'%'}"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "skillParameter",
        data(){
            return {
                skills:[
                    { tool:"HTML", score:90 },
                    { tool:"CSS", score:90 },
                    { tool:"PHP", score:80 },
                    { tool:"Laravel", score:80 },
                    { tool:"JavaScript", score:70 },
                    { tool:"Vue.js", score:70 },
                    { tool:"JQuery", score:70 },

                ]
            }
        }
    }
</script>

<style scoped>

</style>
