var utilityMixin = {
    methods: {
      filterData(searchTerm, data, searchableFields) {
        if(this.isEmpty(searchTerm)) {
            return data
        }
        let regex = new RegExp('\\b' + this.escapeRegExp(searchTerm),'i');
        return data.filter(row => {
          if(Object.keys(row).length != 0) {
              var include = false
              searchableFields.forEach( field => {
                if( regex.test(row[field])) {
                  include = true
                  return
                }
              });
              return include
          }
          return false
        })
      },
      isEmpty(str) {
          return (!str || str.length === 0 );
      },
      escapeRegExp(str) {
        return str.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
      }
    }
}

export {utilityMixin}
  