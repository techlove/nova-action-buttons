import ActionButtonField from './components/ActionButtonField';
import ActionButtonsField from './components/ActionButtonsField';
import DetailActionButtonField from './components/DetailActionButtonField.vue';
import DetailActionButtonsField from './components/DetailActionButtonsField.vue';
import ResourceDetail from './components/Detail.vue';

Nova.booting((app, store) => {
    app.component('index-action-button', ActionButtonField);
    app.component('detail-action-button', DetailActionButtonField);
    app.component('index-action-buttons', ActionButtonsField);
    app.component('detail-action-buttons', DetailActionButtonsField);
    app.component('ResourceDetail', ResourceDetail)
});
