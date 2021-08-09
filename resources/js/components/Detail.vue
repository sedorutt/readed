<template>
  <div>
    <div class="page-head">
      <h2>作品詳細</h2>
      <router-link v-bind:to="{name:'Home'}">
        <button>Home</button>
      </router-link>
    </div>
    <form @submit.prevent="submit"> 
        <label for="title">Title</label>
        <input type="text" id="title" class="edit-area" v-model="book.title">

        <label for="author">作者</label>
        <input type="text" id="author" class="edit-area" v-model="book.author">
    
        <label for="readed_at">読了日</label>
        <input type="date" id="readed_at" class="edit-area" v-model="book.readed_at">

        <label for="review">評価</label>
        <input type="text" id="review" class="edit-area" v-model="book.review">

        <label for="content">コメント</label>
        <input type="text" id="content" class="edit-area" v-model="book.content">

        <button type="submit">更新</button>
    </form>
  </div>
</template>


<script>
export default {
  props:{
    bookId:String
  },
  data(){
    return{
      book:{},
    };
  },
  methods:{
    getBook(){
      axios.get('/api/books/'+this.bookId)
          .then(response => {
            this.book = response.data;
          })
    },
    submit(){
      axios.put('/api/books/' +this.bookId,this.book)
          .then(response => {
            this.$router.push({name:'Home'})
          });
    },
  },
  mounted(){
    this.getBook();
  }
}
</script>

<style scoped>
.page-head {
  display: flex;
  justify-content: space-around;
  margin: 2rem 0;
}
input{
  width: 100%;
}
button {
  margin-top: 3rem;
}
</style>