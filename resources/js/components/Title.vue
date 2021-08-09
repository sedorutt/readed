<template>
  <div>
    <h2>作品一覧</h2>
    <router-link v-bind:to="{name:'Home'}">
      <button>Home</button>
    </router-link>
    
    <div>
      <table>
        <tr>
          <th>作品名</th>
          <th>作者</th>
          <th>読了日</th>
          <th>評価</th>
          <th>コメント</th>
        </tr>
        <tr v-for="(book,index) in books" :key="index">
          <td>
            <router-link v-bind:to="{ name:'Detail' ,params:{bookId:book.id.toString()} }" >
            {{ book.title }}
            </router-link>
          </td>
          <td>
            <router-link v-bind:to="{ name:'Detail' ,params:{bookAuthor:book.author} }" >
            {{ book.author }}
            </router-link>
          </td>
          <td>{{ book.readed_at }}</td>
          <td>{{ book.review }}</td>
          <td>{{ book.content }}</td>
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
      authores:{}

    };
  },
  methods:{
    getBooks(){
      axios.get('/api/books')
          .then(response =>{
            this.books = response.data;
            this.authores = Array.from(new Set(this.books.author))
          });
    }
  },
  mounted(){
    this.getBooks();
  }
}
</script>
<style scoped>
th,td {
  width: 15%;
}

</style>