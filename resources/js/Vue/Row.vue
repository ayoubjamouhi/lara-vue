<template>
    <tr @click="showRow(user.id)">
        <td><router-link :to="{name: 'show-row', params: {id: user.id} }"> {{user.id}}</router-link></td>
        <td>{{createdDate}}</td>
        <td>
            <span :class="{'valide': user.status==='Validé', 'rejected': user.status==='Rejeté', 'on-validation': user.status==='En validation'}">
                {{user.status}}
            </span>
        </td>
        <td>{{user.firstName}}</td>
        <td>{{user.lastName}}</td>
        <td>{{user.userName}}</td>
        <td>{{user.registrationNumber}}</td>
        <td>{{createdDate}}</td>
    </tr>
</template>

<script>
export default {
    props: ["user"],
    name: "Row",
    data() {
        return {
            status: 'on-validation '
        }
    },
    methods: {
        createdDatee() {
            console.log('hello')
            return this.user.createdDate;
        },
        showRow(id) {
            console.log(id)
            this.$router.push(`/show/${id}`);
            alert('hi')
        }
    },
    computed: {
        createdDate() {
            return this.user.createdDate.substr(8,2)+ '/' +this.user.createdDate.substr(5,2) + '/' + this.user.createdDate.substr(0,4);
        },
    },
    mounted() {
    }
}
</script>

<style scoped>
.valide {
    background-color: #5BE881;
}
.rejected {
    background-color: #FF0000;
}
.on-validation {
    background-color: #FDB64D;
}
</style>
