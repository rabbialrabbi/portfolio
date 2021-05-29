<template>
    <div class="col-sm-6 skill_tag text-center">
        <h4>Looking for particular Skill ?</h4>
        <input type="text" placeholder="Write particular skill you want" v-model="filterKey">
        <div class="skill_tag-list" >
            <i class="fas fa-tags" v-for="post in filteredSkills" :key="post.id"> {{post}}</i>
        </div>
    </div>
</template>

<script>

    export default {
        name: "App",
        data() {
            return {
                filterKey: "",
                posts: ['HTML', 'CSS', 'JavaScript', 'Vue', 'Ajax', 'JSON',
                    'PHP', 'Unit', 'Laravel', 'JQuery', 'OOP', 'Regex', 'Glup',
                    'Git', 'SQL', 'MySql', 'PDO', 'Illustrator', 'Photoshop', 'Bootstrap','OAuth2.0',
                ]
            };
        },
        computed: {
            filteredSkills() {
                return this.posts.filter(post =>
                    post.toLowerCase().includes(this.filterKey.toLowerCase())
                );
            }
        }
    };
</script>

<style>

</style>

