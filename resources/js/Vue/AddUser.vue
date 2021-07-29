<template>
<div>
    <button @click="show()">Ajouter d'utilisateur</button>
    <modal name="my-first-modal">
        <form action="" @submit.prevent="submitForm">
            <label for="nom">
                <span>Nom</span>
                <input type="text" id="nom" v-model="user.firstName">
            </label>
            <label for="nom">
                <span>prenom</span>
                <input type="text" id="prenom" v-model="user.lastName">
            </label>
            <button type="submit">Ajouter</button>
        </form>
    </modal>
</div>
</template>

<script>
export default {
    name: "AddUser",
    data() {
        return  {
            user: {
                firstName: '',
                lastName: ''
            }
        }
    },
    methods: {
        show() {
            this.$modal.show('my-first-modal');
        },
        hide() {
            this.$modal.hide('my-first-modal');
        },
        submitForm(user) {
            this.$emit('adduser', this.user);
        }
    },
    mounted() {
        this.show()
    }
}
</script>

<style scoped>

</style>
