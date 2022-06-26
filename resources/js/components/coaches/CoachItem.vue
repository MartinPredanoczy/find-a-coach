<template>
    <li>
        <h3>{{ fullName }}</h3>
        <h4>${{ coachItemData.hourlyRate }}/hour</h4>
        <div>
            <base-badge
                v-for="area in coachItemData.areas"
                :key="area"
                :title="area"
                :type="area"
            ></base-badge>
        </div>
        <div class="actions">
            <base-button link :to="coachContactLink" mode="outline">Contact</base-button>
            <base-button link :to="coachDetailsLink">View Details</base-button>
        </div>
    </li>
</template>

<script>
export default {
    props: ['coachItemData'],
    computed: {
        fullName() {
            return this.coachItemData.firstName + ' ' + this.coachItemData.lastName;
        },

        coachContactLink() {
            // return '/coaches/' + this.id + '/contact';
            return this.$route.path + '/' + this.coachItemData.id + '/contact';
        },

        coachDetailsLink() {
            // return '/coaches/' + this.id;
            return this.$route.path + '/' + this.coachItemData.id;
        },
    },
}

</script>

<style scoped>
li {
    margin: 1rem 0;
    border: 1px solid #424242;
    border-radius: 12px;
    padding: 1rem;
}

h3 {
    font-size: 1.5rem;
}

h3,
h4 {
    margin: 0.5rem 0;
}

div {
    margin: 0.5rem 0;
}

.actions {
    display: flex;
    justify-content: flex-end;
}
</style>
