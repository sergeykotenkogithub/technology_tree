<template>
    <div class="container">
        <div>
            <TreeChart :json="treeData" />
        </div>

        <div class="popup" ref="popup_wrapper">

            <!--      Loader          -->
            <div class="lds-default">
                <div></div><div></div><div></div><div></div><div></div><div></div><div>
            </div><div></div><div></div><div></div><div></div><div></div></div>

            <!--      Данные           -->

            <!--             <div class="popup-wrapper" v-if="loader">-->
            <div class="popup-wrapper">
                <h1 class="popup-title"> {{ nameElement }} </h1>

                <!--      Видео          -->

                <div v-if="infoTechnologyVideo && infoTechnologyVideo.length > 0">
                    <h2> Видео:</h2>
                    <div v-for="item in infoTechnologyVideo" class="video_link">
                        <a :href="item.link" target="_blank"> {{ item.name_link }} </a>
                    </div>
                </div>

                <!--      Материалы          -->

                <div v-if="infoTechnologyMaterial && infoTechnologyMaterial.length > 0">
                    <h2> Материалы:</h2>
                    <div v-for="item in infoTechnologyMaterial" class="video_link">
                        <a :href="item.link" target="_blank"> {{ item.name_link }} </a>
                    </div>
                </div>

                <!--      Шпаргалки          -->

                <div v-if="infoTechnologyCrib && infoTechnologyCrib.length > 0">
                    <h2> Шпаргалки:</h2>
                    <div v-for="item in infoTechnologyCrib" class="video_link">
                        <a :href="item.link" target="_blank"> {{ item.name_link }} </a>
                    </div>
                </div>

                <!--      Книги          -->

                <div v-if="infoTechnologyBooks && infoTechnologyBooks.length > 0" >
                    <h2> Книги:</h2>
                    <div v-for="item in infoTechnologyBooks">
                        <p>  {{ item.name }} </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
import TreeChart from "vue-tree-chart";
import axios from 'axios';
export default {
    components: {
        TreeChart
    },

    data() {
        return {
            nameElement: null,
            infoTechnologyVideo: null,
            infoTechnologyBooks: null,
            infoTechnologyCrib: null,
            infoTechnologyMaterial: null,
            loader: null,
            treeData:
                {
                    name: 'Frontend',
                    image_url: "./assets/img/tree/frontend.jpg",
                    class: ["ssss"],
                    extend: [0],
                    children: [
                        {
                            name: 'HTML',
                            image_url: "./assets/img/tree/html.svg",
                        },
                        {
                            name: 'CSS',
                            image_url: "./assets/img/tree/css.svg",
                            extend: [false],
                            children: [
                                {
                                    name: 'Препроцессоры',
                                    image_url: "./assets/img/tree/preproccesor.jpg",
                                    extend: [false],
                                    children: [
                                        {
                                            name: 'SCSS',
                                            image_url: "./assets/img/tree/preproccesor.jpg",
                                            extend: [false],
                                        },
                                        {
                                            name: 'PostCSS',
                                            image_url: "./assets/img/tree/framework.jpg"
                                        },
                                        {
                                            name: 'Less',
                                            image_url: "./assets/img/tree/methodology.jpg"
                                        }
                                    ]
                                },
                                {
                                    name: 'Фреймворки',
                                    image_url: "./assets/img/tree/framework.jpg",
                                    children: [
                                        {
                                            name: 'Bootstrap',
                                            image_url: "./assets/img/tree/preproccesor.jpg"
                                        },
                                        {
                                            name: 'Materialize',
                                            image_url: "./assets/img/tree/framework.jpg"
                                        },
                                        {
                                            name: 'Bulma',
                                            image_url: "./assets/img/tree/methodology.jpg"
                                        },
                                        {
                                            name: 'Tailwind',
                                            image_url: "./assets/img/tree/methodology.jpg"
                                        }
                                    ]
                                },
                                {
                                    name: 'Методологии',
                                    image_url: "./assets/img/tree/methodology.jpg",
                                    children: [
                                        {
                                            name: 'БЭМ',
                                            image_url: "./assets/img/tree/preproccesor.jpg"
                                        },
                                        {
                                            name: 'Atomic',
                                            image_url: "./assets/img/tree/framework.jpg"
                                        },
                                        {
                                            name: 'SMACSS',
                                            image_url: "./assets/img/tree/methodology.jpg"
                                        }
                                    ]
                                }
                            ]
                        },
                        {
                            name: 'JS',
                            image_url: "./assets/img/tree/js.svg",
                            children: [
                                {
                                    name: 'Фреймворки',
                                    image_url: "./assets/img/tree/preproccesor.jpg",
                                    children: [
                                        {
                                            name: 'React',
                                            image_url: "./assets/img/tree/preproccesor.jpg",
                                            children: [
                                                {
                                                    name: 'Основы',
                                                    image_url: "./assets/img/tree/preproccesor.jpg"
                                                },
                                                {
                                                    name: 'Инструменты',
                                                    image_url: "./assets/img/tree/framework.jpg",
                                                    children: [
                                                        {
                                                            name: 'Роутер',
                                                            image_url: "./assets/img/tree/preproccesor.jpg"
                                                        },
                                                        {
                                                            name: 'CRA',
                                                            image_url: "./assets/img/tree/framework.jpg"
                                                        },
                                                        {
                                                            name: 'Apollo',
                                                            image_url: "./assets/img/tree/framework.jpg"
                                                        },
                                                        {
                                                            name: 'Next',
                                                            image_url: "./assets/img/tree/framework.jpg"
                                                        },
                                                        {
                                                            name: 'Storybook',
                                                            image_url: "./assets/img/tree/framework.jpg"
                                                        },
                                                        {
                                                            name: 'Style',
                                                            image_url: "./assets/img/tree/framework.jpg"
                                                        },
                                                    ]
                                                }
                                            ]
                                        },
                                        {
                                            name: 'Vue',
                                            image_url: "./assets/img/tree/framework.jpg",
                                            children: [
                                                {
                                                    name: 'Nuxt',
                                                    image_url: "./assets/img/tree/preproccesor.jpg"
                                                },
                                                {
                                                    name: 'VueX',
                                                    image_url: "./assets/img/tree/framework.jpg"
                                                },
                                            ]
                                        },
                                        {
                                            name: 'Модификаторы',
                                            image_url: "./assets/img/tree/framework.jpg",
                                            children: [
                                                {
                                                    name: 'MobX',
                                                    image_url: "./assets/img/tree/preproccesor.jpg"
                                                },
                                                {
                                                    name: 'Redux',
                                                    image_url: "./assets/img/tree/framework.jpg"
                                                },
                                            ]
                                        },
                                    ]
                                },
                                {
                                    name: 'Навыки',
                                    image_url: "./assets/img/tree/framework.jpg",
                                    children: [
                                        {
                                            name: 'TypeScript',
                                            image_url: "./assets/img/tree/preproccesor.jpg"
                                        },
                                        {
                                            name: 'Функционал',
                                            image_url: "./assets/img/tree/framework.jpg"
                                        },
                                    ]
                                },
                            ]
                        },
                        // {
                        //     name: 'Инструменты',
                        //     image_url: "./assets/img/tree/tools.svg",
                        //     children: [
                        //         {
                        //             name: 'NPM',
                        //             image_url: "./assets/img/tree/preproccesor.jpg"
                        //         },
                        //         {
                        //             name: 'Webpack',
                        //             image_url: "./assets/img/tree/framework.jpg"
                        //         },
                        //         {
                        //             name: 'Parcel',
                        //             image_url: "./assets/img/tree/methodology.jpg"
                        //         }
                        //     ]
                        // },
                        // {
                        //     name: 'Testing',
                        //     image_url: "./assets/img/tree/test.svg",
                        // },
                        // {
                        //     name: 'Optimization',
                        //     image_url: "./assets/img/tree/optimization.svg",
                        // },
                        // {
                        //     name: 'Work',
                        //     image_url: "./assets/img/tree/work.svg",
                        //     children: [
                        //         {
                        //             name: 'Frontend',
                        //             image_url: "./assets/img/tree/preproccesor.jpg"
                        //         },
                        //         {
                        //             name: 'JavaScript',
                        //             image_url: "./assets/img/tree/framework.jpg"
                        //         },
                        //     ]
                        // }
                    ]
                }
        }

    },
    mounted() {
        document.querySelector('body').addEventListener('click', e => {
            if(e.target.closest('.node')) {
                console.log(e.target.closest('.node').querySelector('.name').textContent)
                const nameTechnology = e.target.closest('.node').querySelector('.name').textContent.toLowerCase();
                this.nameElement =  e.target.closest('.node').querySelector('.name').textContent;
                document.querySelector('.popup').style.display = 'flex';
                this.loadInfo(nameTechnology);
            }
        })

        // Закрытие модального окна вне области
        let vm = this;
        document.addEventListener('click', function (item) {
            if(item.target === vm.$refs['popup_wrapper']) {
                document.querySelector('.popup').style.display = 'none';
                document.querySelector('.popup-wrapper').style.display = 'none';
                document.querySelector('.lds-default').style.display = 'block';
            }
        })
    },
    methods: {
        loadInfo(nameTechnology) {

            axios.get(`/technology/${nameTechnology}/export`)
                .then(res => {
                    this.infoTechnologyVideo = res.data[0].video;
                    this.infoTechnologyBooks = res.data[0].books;
                    this.infoTechnologyCrib = res.data[0].crib;
                    this.infoTechnologyMaterial = res.data[0].material;
                    console.log(res.data)
                    console.log(res.data[0].crib)
                    this.loader = true;
                    document.querySelector('.popup-wrapper').style.display = 'block';
                    document.querySelector('.lds-default').style.display = 'none';
                    console.log(this.infoTechnologyBooks.length > 0)

                    // console.log(res.data[0].video)
                    // console.log(JSON.parse(res.data[0].video).name)
                    // console.log(res.data[0])


                    // let bb = this.infoTechnology [0].video
                    // const countries = [];
                    // for (let population in bb) {
                    //     if (populations.hasOwnProperty(population)) {
                    //         countries.push(population)
                    //     }
                    // }
                    // console.log(countries)
                })
        }
    }

}

</script>

<style lang="scss">
.node .person .avat img {
    object-fit: cover;
}

.node {
    cursor: pointer;
}

.popup {
    display: none;
    justify-content: center;
    align-items: center;
    position: fixed;
    right: 0;
    left: 0;
    top: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    background: rgb(72 72 76 / 68%);
    z-index: 500;
    overflow: auto;
}

.popup-wrapper {
    background: white;
    padding: 100px;
    border-radius: 10%;
}

.video_link {
    font-size: 20px;
    margin: 20px 0px
}

.node .person {
    width: 9em !important;
}

//


.lds-default {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
}
.lds-default div {
    position: absolute;
    width: 6px;
    height: 6px;
    background: #fff;
    border-radius: 50%;
    animation: lds-default 1.2s linear infinite;
}
.lds-default div:nth-child(1) {
    animation-delay: 0s;
    top: 37px;
    left: 66px;
}
.lds-default div:nth-child(2) {
    animation-delay: -0.1s;
    top: 22px;
    left: 62px;
}
.lds-default div:nth-child(3) {
    animation-delay: -0.2s;
    top: 11px;
    left: 52px;
}
.lds-default div:nth-child(4) {
    animation-delay: -0.3s;
    top: 7px;
    left: 37px;
}
.lds-default div:nth-child(5) {
    animation-delay: -0.4s;
    top: 11px;
    left: 22px;
}
.lds-default div:nth-child(6) {
    animation-delay: -0.5s;
    top: 22px;
    left: 11px;
}
.lds-default div:nth-child(7) {
    animation-delay: -0.6s;
    top: 37px;
    left: 7px;
}
.lds-default div:nth-child(8) {
    animation-delay: -0.7s;
    top: 52px;
    left: 11px;
}
.lds-default div:nth-child(9) {
    animation-delay: -0.8s;
    top: 62px;
    left: 22px;
}
.lds-default div:nth-child(10) {
    animation-delay: -0.9s;
    top: 66px;
    left: 37px;
}
.lds-default div:nth-child(11) {
    animation-delay: -1s;
    top: 62px;
    left: 52px;
}
.lds-default div:nth-child(12) {
    animation-delay: -1.1s;
    top: 52px;
    left: 62px;
}
@keyframes lds-default {
    0%, 20%, 80%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.5);
    }
}

.popup-wrapper {
    display: none;
}

.popup-title {
    text-align: center;
    padding-bottom: 30px;
}



</style>
