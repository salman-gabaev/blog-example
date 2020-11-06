<template>
    <form v-on:submit.prevent>

        <div v-if="success" class="alert alert-success" role="alert">{{ success }}</div>
        <div v-if="error" class="alert alert-danger" role="alert">{{ error }}</div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" v-model="article.subject">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="7" v-model="article.message"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary px-5" type="button" @click="send" :disabled="loading">
                <span v-if="loading" class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>
                Send
            </button>
        </div>
    </form>
</template>

<script>
    import Event from '../event/event';

    export default {
        name: "Form",

        props: {
            articleId: {
                type: Number,
                default: null
            }
        },

        data () {
            return {
                article: {
                    subject: null,
                    message: null,
                    article_id: this.articleId
                },

                loading: false,
                success: null,
                error: null,
            }
        },

        methods: {
            send () {
                this.loading = true;

                axios.post('/api/comments', this.article).then(resp => {
                    this.loading = false;
                    this.success = resp.data.success;
                    Event.$emit('new-comment', resp.data.comment);

                    this.clear();
                })
                .catch (error => {
                    this.loading = false;
                    let err = Object.values(error.response.data.errors)

                    this.error = (err.shift()).shift();
                    this.error ? setTimeout(() => this.error = null, 3000) : null;
                })
            },

            clear () {
                this.article.subject = null;
                this.article.message = null;

                this.success ? setTimeout(() => this.success = null, 3000) : null;
                this.error ? setTimeout(() => this.error = null, 3000) : null;
            }
        }
    }
</script>

<style scoped>
    .spinner-border {
        vertical-align: sub;
    }
</style>
