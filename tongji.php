<?php

/**
 * 统计
 * 
 * @package custom 
 * 
 **/

?>
<?php $this->need('public/header.php'); ?>

<div class="content-all">
<?php $this->need('sidebar.php'); ?>
        <div class="content">
             <!-- <div class="content-list"> -->
		
  
             <div class="comments-a"><div class="typecho-header">
              <div id="main-one" style="width: 55rem; height:20rem;"></div>


              <script type="text/javascript">
              

        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main-one'));
 
        // 指定图表的配置项和数据
        option = {
  xAxis: {
    type: 'category',
    data: ['A', 'B', '单日内']
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      data: [120, 200, <?php echo getNumPosts(2); ?>],
      type: 'line'
    }
  ]
};
 
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
 </div>
</div>


             
</div>

        </div>
       
        </div>
	
		<?php $this->need('public/footer.php'); ?>
		</div>  
			 </div>
			
</body>
