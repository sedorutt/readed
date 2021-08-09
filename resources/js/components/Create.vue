<template>
  <div>
    <router-link v-bind:to="{name:'Home'}">
      <button>Home</button>
    </router-link>
    <div class="create">
      <form @submit.prevent="submit">
        <label for="title">タイトル</label>
        <input type="text" id="title" v-model="book.title">
        <label for="author">著者</label>
        <input type="text" id="author" v-model="book.author">
        <label for="readed-day">読み終えた日</label>
        <input type="date" id="readed-day" v-model="book.readed_at">
        <label for="review">評価</label>
        <input type="number" id="review" min="0" max="10" v-model="book.review">
        <label for="content">コメント</label>
        <input type="text" id="content" v-model="book.content">
        <label for="user_name">読んだ人</label>
        <input type="text" id="user_name" v-model="book.user_name"><br>
        <button type="submit">追加する</button>
      </form>
    </div>
  </div>
</template>


<script>
export default {
  data(){
    return{
      book:{},

    };
  },
  methods:{
    submit(){
      axios.post('/api/books',this.book)
          .then(response => {
            this.$router.push({name:'Home'})
          });
    }
  }
}
</script>

<style scoped>
input{
  width: 100%;
}
button {
  margin-top: 3rem;
}
</style>