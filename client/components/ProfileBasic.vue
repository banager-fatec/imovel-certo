<template>
  <div class="profile-basic">
    <div class="profile-info">
      <span class="name">João Reis</span>
      <span class="email">joaoreis@gmail.com</span>
    </div>
    <div class="profile-pic">
      <img src="https://picsum.photos/40" alt="Foto de perfil do João Reis">
    </div>
  </div>
</template>

<style scoped>
.profile-basic {
  display: flex;
  align-items: center;
  cursor: pointer;
}

.profile-basic .profile-info {
  display: flex;
  flex-direction: column;
  text-align: right;
}

.profile-basic .profile-info .name {
  font-weight: 600;
  font-size: 16px;
}

.profile-basic .profile-pic {
  margin-left: 8px;
}
.profile-basic .profile-pic img {
  border-radius: 50px;
}
</style>

