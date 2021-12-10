<template>
        <div class="container">
            <div class="main-body">
                <!-- Breadcrumb -->
                <nav
                    aria-label="breadcrumb"
                    class="main-breadcrumb bg-primary shadow-soft border-light mt-4"
                >
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">{{
                                currentUser.username
                            }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Профиль
                        </li>
                    </ol>
                </nav>
                <!-- /Breadcrumb -->

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div
                            class="card bg-primary shadow-soft border-light text-center py-4 mb-5"
                        >
                            <div class="card-body">
                                <div
                                    class="d-flex flex-column align-items-center text-center"
                                >
                                    <img
                                        src="/assets/img/team/team2.png"
                                        alt="Admin"
                                        class="rounded-circle"
                                        width="150"
                                    />
                                    <div class="mt-3">
                                        <h4>Андрей</h4>

                                        <p class="text-grey mb-1">
                                            Фронтенд разработчик
                                        </p>
                                        <p class="text-muted font-size-sm">
                                            Москва, Россия
                                        </p>
                                        <p>
                                            <strong>Email:</strong>
                                            {{ currentUser.email }}
                                        </p>
                                        <strong>Разрешения:</strong>
                                        <ul>
                                            <p>Администратор</p>
                                            <li
                                                v-for="(
                                                    role, index
                                                ) in currentUser.roles"
                                                :key="index"
                                            >
                                                {{ role }}
                                            </li>
                                        </ul>
                                        <base-button class="mt-4"
                                            ><router-link to="#">
                                                Выбрать путь</router-link
                                            >
                                        </base-button>
                                        <base-button class="mt-4"
                                            ><router-link to="#">
                                                Написать</router-link
                                            >
                                        </base-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="card mt-3 bg-primary shadow-soft border-light text-center text-gray py-4 mb-5"
                        >
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap"
                                >
                                    <a
                                        href="https://dribbble.com/TechTree"
                                        target="_blank"
                                        class="btn btn-icon-only btn-pill btn-primary"
                                        aria-label="dribbble social link"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Follow us on Dribbble"
                                    >
                                        <span
                                            aria-hidden="true"
                                            class="fab fa-dribbble"
                                        ></span>
                                    </a>
                                    <h6 class="mb-0">Website</h6>
                                    <span class="text-gray"
                                        >https:// Lestaber .com</span
                                    >
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap"
                                >
                                    <a
                                        href="https://github.com/TechTree"
                                        target="_blank"
                                        class="btn btn-icon-only btn-pill btn-primary"
                                        aria-label="github social link"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Open source projects"
                                    >
                                        <span
                                            aria-hidden="true"
                                            class="fab fa-github"
                                        ></span>
                                    </a>
                                    <h6 class="mb-0">Github</h6>
                                    <span class="text-gray"> Lestaber </span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap"
                                >
                                    <a
                                        href="https://twitter.com/TechTree"
                                        target="_blank"
                                        class="btn btn-icon-only btn-pill btn-primary"
                                        aria-label="twitter social link"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Follow @TechTree on Twitter"
                                    >
                                        <span
                                            aria-hidden="true"
                                            class="fab fa-twitter"
                                        ></span>
                                    </a>
                                    <h6 class="mb-0">Twitter</h6>
                                    <span class="text-gray">@ Lestaber </span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap"
                                >
                                    <a
                                        href="https://instagram.com/TechTree"
                                        target="_blank"
                                        class="btn btn-icon-only btn-pill btn-primary"
                                        aria-label="instagram social link"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Follow @TechTree on Twitter"
                                    >
                                        <span
                                            aria-hidden="true"
                                            class="fab fa-instagram"
                                        ></span>
                                    </a>
                                    <h6 class="mb-0">Instagram</h6>
                                    <span class="text-gray"> Lestaber </span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap"
                                >
                                    <a
                                        href="https://www.facebook.com/TechTree/"
                                        target="_blank"
                                        class="btn btn-icon-only btn-pill btn-primary"
                                        aria-label="facebook social link"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Like @TechTree on Facebook"
                                    >
                                        <span
                                            aria-hidden="true"
                                            class="fab fa-facebook"
                                        ></span>
                                    </a>
                                    <h6 class="mb-0">Facebook</h6>
                                    <span class="text-gray"> Lestaber </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div
                            class="card mb-3 bg-primary shadow-soft border-light text-center py-4 mb-5"
                        >
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Имя</h6>
                                    </div>
                                    <div class="col-sm-9 text-grey">
                                        Андрей Т.
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-grey">
                                        {{ currentUser.email }}
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Телефон</h6>
                                    </div>
                                    <div class="col-sm-9 text-grey">
                                        (123) 456-78-90
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Образование </h6>
                                    </div>
                                    <div class="col-sm-9 text-grey">
                                       Высшее
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Профессия </h6>
                                    </div>
                                    <div class="col-sm-9 text-grey">
                                       Фронтенд разработчик
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Адрес</h6>
                                    </div>
                                    <div class="col-sm-9 text-grey">
                                        Москва, Россия
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-12">
                                        <base-button class="mt-4"
                                            ><router-link to="/profile/edit">
                                                Редактировать</router-link
                                            >
                                        </base-button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row gutters-sm">
                            <div class="col-sm-6 mb-3">
                                <div
                                    class="card h-100 bg-primary shadow-soft border-light text-center py-4 mb-5"
                                >
                                    <div class="card-body">
                                        <h6
                                            class="d-flex align-items-center justify-content-center mb-2"
                                        >
                                            <i
                                                class="fas fa-chart-line mr-2"
                                            ></i
                                            >Общий рейтинг
                                        </h6>
                                        <small>HTML</small>
                                        <div
                                            class="progress mb-3"
                                            style="height: 5px"
                                        >
                                            <div
                                                class="progress-bar bg-gradient-gray-600"
                                                role="progressbar"
                                                style="width: 89%"
                                                aria-valuenow="80"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                        <small>Css</small>
                                        <div
                                            class="progress mb-3"
                                            style="height: 5px"
                                        >
                                            <div
                                                class="progress-bar bg-gradient-gray-600"
                                                role="progressbar"
                                                style="width: 80%"
                                                aria-valuenow="72"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                        <small>Javascript</small>
                                        <div
                                            class="progress mb-3"
                                            style="height: 5px"
                                        >
                                            <div
                                                class="progress-bar bg-gradient-gray-600"
                                                role="progressbar"
                                                style="width: 79%"
                                                aria-valuenow="89"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                        <small>React.js</small>
                                        <div
                                            class="progress mb-3"
                                            style="height: 5px"
                                        >
                                            <div
                                                class="progress-bar bg-gradient-gray-600"
                                                role="progressbar"
                                                style="width: 67%"
                                                aria-valuenow="55"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                        <small>Vue..js</small>
                                        <div
                                            class="progress mb-3"
                                            style="height: 5px"
                                        >
                                            <div
                                                class="progress-bar bg-gradient-gray-600"
                                                role="progressbar"
                                                style="width: 55%"
                                                aria-valuenow="66"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div
                                    class="card h-100 bg-primary shadow-soft border-light text-center py-4 mb-5"
                                >
                                    <div class="card-body">
                                        <h6
                                            class="d-flex align-items-center justify-content-center mb-2"
                                        >
                                            <i
                                                class="fas fa-flag-checkered mr-2"
                                            ></i
                                            >Личный рейтинг
                                        </h6>
                                        <small>HTML</small>
                                        <div
                                            class="progress mb-3"
                                            style="height: 5px"
                                        >
                                            <div
                                                class="progress-bar bg-gradient-gray-600"
                                                role="progressbar"
                                                style="width: 80%"
                                                aria-valuenow="80"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                        <small>Css</small>
                                        <div
                                            class="progress mb-3"
                                            style="height: 5px"
                                        >
                                            <div
                                                class="progress-bar bg-gradient-gray-600"
                                                role="progressbar"
                                                style="width: 72%"
                                                aria-valuenow="72"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                        <small>Javascript</small>
                                        <div
                                            class="progress mb-3"
                                            style="height: 5px"
                                        >
                                            <div
                                                class="progress-bar bg-gradient-gray-600"
                                                role="progressbar"
                                                style="width: 89%"
                                                aria-valuenow="89"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
import BaseButton from "../../components/Base/BaseButton.vue";
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
