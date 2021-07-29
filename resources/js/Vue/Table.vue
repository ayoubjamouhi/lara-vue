<template>
<table>
    <tr>
        <th>ID</th>
        <th>Date de creation</th>
        <th>Etat</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Nom d'utilisateur</th>
        <th>Matricule</th>
        <th>Action</th>
    </tr>
    <Row v-for="(user,index) in users" v-bind:key="index" :user="user"></Row>
</table>
</template>

<script>
import Row from '../Vue/Row';
export default {
    name: "Table",
    components: {Row},
    props: ["users"],
    computed: {
        fullname() {
            return 'Ayoub';
        }
    },
    methods: {
    }
}
</script>

<style scoped>

</style>
