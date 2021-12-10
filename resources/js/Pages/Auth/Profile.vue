<template>
    <div class="container">
        <header class="jumbotron">
            <h3>
                <strong>{{ currentUser.username }}</strong> Profile
            </h3>
        </header>
        <p>
            <strong>Token:</strong>
        </p>
        <p>
            <strong>Id:</strong>
            {{ currentUser.id }}
        </p>
        <p>
            <strong>Email:</strong>
            {{ currentUser.email }}
        </p>
        <strong>Authorities:</strong>
        <ul>
            <li v-for="(role, index) in currentUser.roles" :key="index">
                {{ role }}
            </li>
        </ul>
        <hr>
        <hr>

        <!--    Подгрузка с профиля    -->

        <div>
            <p v-if="infoUser">
                <strong>Name:</strong>
                {{ infoUser.name }}
            </p>
            <p v-if="infoUser">
                <strong>Gender:</strong>
                {{ infoUserGender }}
            </p>
            <p v-if="infoUser">
                <strong>Interesting:</strong>
                {{ infoUser.interesting }}
            </p>

        </div>


    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: "Profile",
    data() {
        return {
            infoUser: null,
            infoUserGender: null
        }
    },
    computed: {
        currentUser() {
            return this.$store.state.auth.user;
        },
    },
    mounted() {
        if (!this.currentUser) {
            this.$router.push("/login");
        }
        console.log(this.currentUser.id);
        this.loadInfo(this.currentUser.id);
    },
    methods: {
        loadInfo(userId) {
            axios.get(`/api/profile/${userId}`)
                .then(res => {
                    this.infoUser = res.data[0];
                    if(res.data[0].gender && res.data[0].gender === 'М') {
                        this.infoUserGender = 'Мужской';
                    } else {
                        this.infoUserGender = 'Женский';
                    }
            })
        }
    }
};
</script>
