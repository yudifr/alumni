import store from '~/store'

export default (to, from, next) => {
  const user = store.getters['auth/user']
  
  if (user) {
    if(user.role == 'consumer')
    next({ name: 'consumer.data' })
  } else {
    next()
  }
}
