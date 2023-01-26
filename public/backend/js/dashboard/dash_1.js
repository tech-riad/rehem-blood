try {

  /*
      ==============================
      |    @Options Charts Script   |
      ==============================
  */
  
  /*
      =============================
          Daily Sales | Options
      =============================
  */
     
  
  /*
      =============================
          Total Orders | Options
      =============================
  */ 
  

  
  /*
      =================================
          Revenue Monthly | Options
      =================================
  */

  
  /*
      ==================================
          Sales By Category | Options
      ==================================
  */

 
  
  /*
      ==============================
      |    @Render Charts Script    |
      ==============================
  */
  
  
  /*
      ============================
          Daily Sales | Render
      ============================
  */

  
  /*
      ============================
          Total Orders | Render
      ============================
  */

  
  /*
      ================================
          Revenue Monthly | Render
      ================================
  */

  

  
  /*
      =================================
          Sales By Category | Render
      =================================
  */

  
  /*
      =============================================
          Perfect Scrollbar | Recent Activities
      =============================================
  */
 $('.mt-container').each(function(){ const ps = new PerfectScrollbar($(this)[0]); });
  
  const topSellingProduct = new PerfectScrollbar('.widget-table-three .table-scroll table', {
    wheelSpeed:.5,
    swipeEasing:!0,
    minScrollbarLength:40,
    maxScrollbarLength:100,
    suppressScrollY: true
  
  });
  
  } catch(e) {
      console.log(e);
  }