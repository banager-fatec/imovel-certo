<template>
  <nav class="navigator">
    <ul class="navigator__items">
      <li class="item">
        <fa class="icon" icon="book" />
        <span>Todos</span>
      </li>
      <li class="item">
        <fa class="icon" icon="lock-open" />
        <span>Disponíveis</span>
      </li>
      <li class="item">
        <fa class="icon" icon="lock" />
        <span>Alugados</span>
      </li>
      <li class="item">
        <fa class="icon" icon="clock" />
        <span>Atrasados</span>
      </li>
      <li class="item">
        <fa class="icon" icon="dollar-sign" />
        <span>Multas</span>
      </li>
      <li class="item">
        <fa class="icon" icon="user-friends" />
        <span>Clientes</span>
      </li>
    </ul>
  </nav>  
</template>

<script>
export default {
  
}
</script>

<style scoped>
.navigator {}

.navigator__items {
  display: flex;
  align-items: flex-end;

  padding: 0;
}

.navigator__items .item {
  
  display: flex;
  align-items: center;
  cursor: pointer;

  list-style-type: none;
  
  height: 43px;
  
  padding: 0 16px;
  margin: 0 8px;
  
  background: rgba(255,255,255,.5);
  
  border-radius: 4px 4px 0 0;
  
  color: #385683;
  font-family: 'Didact Gothic', sans-serif;
}

.navigator__items .item .icon {
  margin-right: 8px;
}

.navigator__items .item:first-child {
  margin-left: 0;
}
</style>
