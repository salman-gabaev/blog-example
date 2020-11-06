<template>
    <h5 class="my-3">Views Count - <span class="badge badge-secondary">{{ views_count}}</span></h5>
</template>

<script>
    export default {
        name: "Views",

        props: {
            count: {
                type: Number,
                default: 0
            },

            id: {
                type: Number,
                default: 0
            }
        },

        data () {
            return {
                views_count: this.count
            }
        },

        mounted() {
            setTimeout(this.increment, 5000)
        },

        methods: {
            increment() {
                axios.post('/api/articles/views/' + this.id).then(resp => {
                    this.views_count++;
                })
            }
        }
    }
</script>

<style scoped>

</style>
