<script>
import _ from "lodash";

export default {
  props: ["spares"],

  data: function() {
    return {
      selectedSpares: [],
      totalPrice: 0
    };
  },

  methods: {
    selectSpare(spare, checked) {
      if (checked) {
        spare.amount = 1;
        this.selectedSpares.push(spare);
        this.totalPrice += spare.price;
      } else {
        var indexToRemove = _.findIndex(this.selectedSpares, {
          id: spare.id
        });

        this.selectedSpares.splice(indexToRemove, 1);
        this.totalPrice -= spare.price;
      }
    },

    increseAmount(spare) {
      spare.amount++;
      this.totalPrice += spare.price;
    },
    decreseAmount(spare) {
      if (spare.amount > 1){
         spare.amount--;
         this.totalPrice -= spare.price;
      } 
    }
  }
};
</script>
