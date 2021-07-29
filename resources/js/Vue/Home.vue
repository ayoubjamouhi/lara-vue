<template>
    <div>
        <Table :users="users"/>
        <AddUser @adduser="addUser($event)"/>
    </div>
</template>
<script>
    import Table from "./Table";
    import AddUser from "./AddUser";
    export default {
    components: {
        Table,
        AddUser
    },
    data() {
    return {
    users: [
    {
        id: "123456789",
        createdDate: "2021-01-06T00:00:00.000Z",
        status: "En validation",
        firstName: "Mohamed",
        lastName: "Taha",
        userName: "mtaha",
        registrationNumber: "2584",
    },
    {
        id: "987654321",
        createdDate: "2021-07-25T00:00:00.000Z",
        status: "Validé",
        firstName: "Hamid",
        lastName: "Orrich",
        userName: "horrich",
        registrationNumber: "1594",
    },
    {
        id: "852963741",
        createdDate: "2021-09-15T00:00:00.000Z",
        status: "Rejeté",
        firstName: "Rachid",
        lastName: "Mahidi",
        userName: "rmahidi",
        registrationNumber: "3576",
    }
    ]
    }
    },
    methods: {
    addUser(user) {
    console.log(user.firstName)
    const user1 =
    {
        id: "852963741",
        createdDate: "2021-09-15T00:00:00.000Z",
        status: "Rejeté",
        firstName: "Rachid",
        lastName: "Mahidi",
        userName: "rmahidi",
        registrationNumber: "3576",
    }
    this.users.push(user)
    alert("add")
    }
    }
    }
</script>
<style>

</style>

