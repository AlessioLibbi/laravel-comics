

<template>
    <header class="header-box">
        <div class="left">
            <a href="">
                <img src="../assets/img/dc-logo.png" alt="">
            </a>
        </div>
        <nav class="right">
            <ul class="nav-list">
                <li v-for="link in links" :class="link.current ? 'active' : ''">
                    <a :href="link.url">{{ link.text }}</a>
                </li>
            </ul>
        </nav>
    </header>
</template>

<style scoped lang="scss">
@use "../style/partials/mixins" as *;
@use "../style/partials/variables" as *;

.header-box {
    @include flex(row, space-between, center);
    width: $width;
    margin: 0 auto;
    height: 140px;

    .right {


        ul {
            @include flex(row, space-between, center);
            list-style: none;

            li {
                margin: 0 10px;


                a {
                    text-decoration: none;
                    font-weight: 700;
                    color: inherit;
                }

                &.active,
                &:hover {
                    color: $primary;
                    border-bottom: 5px solid $primary;
                }
            }
        }
    }
}
</style>