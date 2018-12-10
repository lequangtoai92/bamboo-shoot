var firstTable = new Vue({
  el: '#firstTable',
  data: {
    rows: [
      { id: 1, name: "Chú mèo con", describe: 'Chú mèo con ham ăn nên bị bạn bè xa lánh', virtues: 'Chia sẻ, nhường nhịn', age: 'Mầm', rate: '8/10' },
      { id: 2, name: "Chú chó con", describe: 'Chú mèo con ham ăn nên bị bạn bè xa lánh', virtues: 'Chia sẻ, nhường nhịn', age: 'Mầm', rate: '8/10' },
      { id: 3, name: "Chú heo con", describe: 'Chú mèo con ham ăn nên bị bạn bè xa lánh', virtues: 'Chia sẻ, nhường nhịn', age: 'Mầm', rate: '8/10' },
      { id: 4, name: "Chú gà con", describe: 'Chú mèo con ham ăn nên bị bạn bè xa lánh', virtues: 'Chia sẻ, nhường nhịn', age: 'Mầm', rate: '8/10' },
      { id: 5, name: "Chú chuột con", describe: 'Chú mèo con ham ăn nên bị bạn bè xa lánh', virtues: 'Chia sẻ, nhường nhịn', age: 'Mầm', rate: '8/10' }
    ]
  },

  methods: {
    goToContent: function (data) {
      document.location.href = '/content?userId=123'
    }
  }
});