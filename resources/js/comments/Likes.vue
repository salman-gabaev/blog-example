<template>
    <button type="button" class="btn btn-primary" @click="like">
        likes count
        <span class="badge badge-light ml-3">
            {{ likes_count }}
        </span>
    </button>
</template>

<script>
    export default {
        name: "Likes",

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
                likes_count: this.count
            }
        },

        methods: {
            like() {
                axios.post('/api/articles/likes/' + this.id).then(resp => {
                    this.likes_count++;
                })
            }
        }
    }
</script>

<style scoped>

</style>
