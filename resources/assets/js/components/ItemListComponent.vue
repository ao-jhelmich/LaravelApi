<template>
    <div class='row'>
        <h1>All items</h1>
        <h4>New item</h4>
        <form action="#" @submit.prevent="createItem()">
            <div class="input-group">
                <input v-model="item.name" type="text" name="body" class="form-control" autofocus>
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">New Item</button>
                </span>
            </div>
        </form>
        <h4>All Items</h4>
        <ul class="list-group">
            <li v-if='list.length === 0'>There are no items yet!</li>
            <li class="list-group-item" v-for="(item, index) in list">
                 {{ item.name }}
                 <button @click="deleteItem(item.id)" class="btn btn-danger btn-xs pull-right">Delete</button>
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                list: [],
                item: {
                    id: '',
                    name: ''
                }
            };
        },
        
        created() {
            this.fetchItems();
        },
        
        methods: {
            fetchItems() {
                axios.get('api/item').then((res) => {
                    this.list = res.data;
                });
            },
 
            createItem() {
                axios.post('api/item', this.item)
                    .then((res) => {
                        this.item.name = '';
                        this.edit = false;
                        this.fetchItems();
                    })
                    .catch((err) => console.error(err));
            },
 
            deleteItem(id) {
                axios.delete('api/item/' + id)
                    .then((res) => {
                        this.fetchItems()
                    })
                    .catch((err) => console.error(err));
            },
        }
    }
</script>