<backend-component-document
    :header-collapsed="documentHeaderCollapsed"
    :full-screen="documentFullScreen"
    :loading="initializing"
    :processing="processing"
    :error-loading-document="errorLoadingDocument"
    error-loading-document-header="<?= e(trans('cms::lang.editor.error_loading_header')) ?>"
    container-css-class="fill-container"
>
    <template v-slot:header>
        <backend-component-document-header
            title-property="fileName"
            ref="documentHeader"
            :data="documentData"
            :disabled="isDirectDocumentMode || processing"
            :document-icon="directDocumentIcon"
            :show-close-icon="isDirectDocumentMode"
            @documentcloseclick="onDocumentCloseClick"
        ></backend-component-document-header>
    </template>

    <template v-slot:toolbar>
        <backend-component-document-toolbar
            :elements="toolbarElements"
            @command="onToolbarCommand"
            :disabled="processing"
        ></backend-component-document-toolbar>
    </template>

    <template v-slot:content>
        <div class="flex-layout-column fill-container">
            <div class="flex-layout-item stretch editor-panel relative">
                <backend-component-monacoeditor
                    v-show="!isRicheditorDocument && !isMarkdownDocument"
                    ref="editor"
                    container-css-class="fill-container"
                    :model-definitions="codeEditorModelDefinitions"
                    @monacoloaded="onMonacoLoaded"
                    @dispose="onMonacoDispose"
                    @contextmenu="onEditorContextMenu"
                    @filtersupportedactions="onEditorFilterSupportedActions"
                >
                </backend-component-monacoeditor>

                <backend-component-richeditor-document-connector
                    :allow-resizing="true"
                    :toolbar-container="toolbarExtensionPoint"
                    :use-media-manager="editorUserData.useMediaManager"
                    unique-key="content-html-editor"
                    container-css-class="fill-container"
                    v-if="isRicheditorDocument"
                >
                    <backend-component-richeditor
                        v-model="documentData.markup"
                    >
                    </backend-component-richeditor>
                </backend-component-richeditor-document-connector>

                <backend-component-documentmarkdowneditor
                    v-if="isMarkdownDocument"
                    v-model="documentData.markup"
                    ref="markdownEditor"
                    container-css-class="fill-container"
                    :toolbar-container="toolbarExtensionPoint"
                    :use-media-manager="editorUserData.useMediaManager"
                >
                </backend-component-documentmarkdowneditor>
            </div>

            <editor-conflict-resolver
                ref="conflictResolver"
            ></editor-conflict-resolver>
        </div>
    </template>
</backend-component-document>