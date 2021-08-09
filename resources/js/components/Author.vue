<template>
  <div>
    <router-link v-bind:to="{name:'Home'}">
      <button>Home</button>
    </router-link>
    <div class="authors">
      <table>
        <tr>
          <th>作者名一覧</th>
        </tr>
        <tr v-for="(book,index) in books" :key="index">
          <td>{{ book.author }}</td>
        </tr>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      books:[],

    };
  },
  methods:{
    getBooks(){
      axios.get('/api/books')
          .then(response =>{
            this.books = response.data;
          });
    }
  },
  mounted(){
    this.getBooks();
  }
}
</script>