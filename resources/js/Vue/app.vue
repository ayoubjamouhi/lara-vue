<template>
    <div>
        <div>
            <router-link to="/" name="index">Go to index</router-link>
            <router-link to="/about" name="about">About</router-link>
        </div>
        {{getCounter}}
        <button @click="inc({data: 5})">Inc</button>
        <router-view />
    </div>
</template>

<script>
    import {mapGetters, mapActions } from 'vuex';
    export default {
        computed: {
/*
            counter() {
                return this.$store.getters.counter;
            }
*/
            ...mapGetters('counter', ['getCounter'])
        },
        methods: {

/*
            increment() {
                this.$store.dispatch({type: 'increment', data:5});
            }
*/
            ...mapActions('counter', { 'inc' :'incrementAct'})
        }
    }
</script>
<style>

</style>
