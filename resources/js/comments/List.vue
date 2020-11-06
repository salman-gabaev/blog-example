<template>
    <ul class="list-inline">
        <li class="mb-3" v-for="item in comments">
            <span class="font-weight-bold d-block">{{ moment(item.created_at).format("DD-MM-YYYY hh:mm") }} - {{ item.subject }}</span>
            <span>{{ item.message }}</span>
        </li>
    </ul>
</template>

<script>
    import Event from '../event/event';
    import moment from "moment";

    export default {
        name: "List",

        props: {
            items: {
                type: Array,
                default: null
            }
        },

        data () {
            return {
                comments: this.items,
                moment: moment
            }
        },

        mounted () {
            Event.$on('new-comment', (item) => {
                this.comments.push(item)
            })
        }
    }
</script>

<style scoped>

</style>
