<header id="opportunity-list-header" class="entity-list-header clearfix" ng-show="data.global.filterEntity == 'opportunity'">
  <h1><span class="icon icon-opportunity"></span> <?php $this->dict('entities: Opportunities') ?></h1>
</header>

<div id="lista-dos-oportunidades" class="lista opportunity" infinite-scroll="data.global.filterEntity === 'opportunity' && addMore('opportunity')" ng-show="data.global.filterEntity === 'opportunity'">
  <?php $this->part('user-management/search-list/list-opportunity-item'); ?>
</div>