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
                <h1> {{ nameElement }} </h1>
                <!--                <div>-->
                <!--                    <h2> Книги:</h2>-->
                <!--                    HTML and CSS: Design and Build Websites-->
                <!--                </div>-->
                <div>
                    <h2> Видео:</h2>
                    <div v-for="item in infoTechnologyVideo" class="video_link">
                        <a :href="item.link" target="_blank"> {{ item.name_link }} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import TreeChart from "vue-tree-chart";
export default {
    components: {
        TreeChart
    },

    data() {
        return {
            nameElement: null,
            infoTechnologyVideo: null,
            loader: null,
            treeData:
                {
                    name: 'Frontend',
                    image_url: "./images/frontend.jpg",
                    class: ["rootNode"],
                    children: [
                        {
                            name: 'HTML',
                            image_url: "./images/html.svg",
                        },
                        {
                            name: 'CSS',
                            image_url: "./images/css.svg",
                            children: [
                                {
                                    name: 'Preprocessors',
                                    image_url: "./images/preproccesor.jpg"
                                },
                                {
                                    name: 'Frameworks',
                                    image_url: "./images/framework.jpg"
                                },
                                {
                                    name: 'Methodology',
                                    image_url: "./images/methodology.jpg"
                                }
                            ]
                        },
                        {
                            name: 'JS',
                            image_url: "./images/js.svg",
                        },
                        {
                            name: 'Инструменты',
                            image_url: "./images/tools.svg",
                            children: [
                                {
                                    name: 'NPM',
                                    image_url: "./images/preproccesor.jpg"
                                },
                                {
                                    name: 'Webpack',
                                    image_url: "./images/framework.jpg"
                                },
                                {
                                    name: 'Parcel',
                                    image_url: "./images/methodology.jpg"
                                }
                            ]
                        },
                        {
                            name: 'Testing',
                            image_url: "./images/test.svg",
                        },
                        {
                            name: 'Optimization',
                            image_url: "./images/optimization.svg",
                        },
                        {
                            name: 'Work',
                            image_url: "./images/work.svg",
                            children: [
                                {
                                    name: 'Frontend',
                                    image_url: "./images/preproccesor.jpg"
                                },
                                {
                                    name: 'JavaScript',
                                    image_url: "./images/framework.jpg"
                                },
                            ]
                        }
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
                    console.log(this.infoTechnologyVideo)
                    this.loader = true;
                    document.querySelector('.popup-wrapper').style.display = 'block';
                    document.querySelector('.lds-default').style.display = 'none';
                    // console.log(this.infoTechnology)
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
    width: 7em !important;
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



</style>
