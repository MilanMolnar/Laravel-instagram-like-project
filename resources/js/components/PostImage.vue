<template>
    <div>
        <img v-on:load="vanillaTilt" v-bind:src="source" alt="" class="w-100 h100">
    </div>
</template>


<script>
    import VanillaTilt from "vanilla-tilt";

    export default {
        props: ['post'],
        mounted() {
            console.log('Component mounted.')
        },
        data: function () {
            return {
            }
        },
        methods:{
            vanillaTilt() {
                VanillaTilt.init(document.querySelector('#pic'))
            }
        },

        computed: {

            source(){
                return "/storage/" + this.post
            }

        }
    }

</script>

