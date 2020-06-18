<template>
    <div class="col-sm-6 skill_tag">
        <h4>Looking for particular Skill ?</h4>
        <input type="text" placeholder="Write particular skill you want" v-model="searchKey">
        <div class="skill_tag-list">
            <i class="fas fa-tags" v-for="skill in skillFilter" > {{skill}}</i>
        </div>
    </div>
</template>

<script>
    export default {
        name: "skill-search",
        data(){
            return {
                searchKey:'',
                skills: [
                    'HTML','CSS','JavaScript','Vue', 'Ajax', 'JSON', 'PHP', 'Unit', 'Laravel',
                    'JQuery', 'OOP', 'Regex', 'Glup', 'Git', 'SQL', 'MySql', 'PDO', 'Illustrator',
                    'Photoshop',
                ]
            }
        },
        methods:{

        },
        computed:{
            skillFilter(){
                return this.skills.filter(skill=>{
                    skill.toLowerCase()
                })
            }
        }
    }
</script>

<style scoped>

</style>
