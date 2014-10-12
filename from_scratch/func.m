function [ final ] = func( CC )
% x(find(x==0))=1;
%  col(find(col==0))=48;

% final=zeros(1,4);
% 
% final(1,1)=min(col);
% final(1,2)=min(row);
% final(1,3)=max(col);
% final(1,4)=max(row);
h=CC.ImageSize(1);
w=CC.ImageSize(2);
labeled = labelmatrix(CC);
num=size(unique(labeled))-1;
final=zeros(num,4);
final(:,1)=w;
final(:,2)=h;
final(:,3)=1;
final(:,4)=1;
for i=1:w
    for j=1:h
        if labeled(j,i)>0
            if final(labeled(j,i),1)>i
                final(labeled(j,i),1)=i;
            end
            if(final(labeled(j,i),3)<i)
                final(labeled(j,i),3)=i;
            end
            if final(labeled(j,i),2)>j
                final(labeled(j,i),2)=j;
            end
            if(final(labeled(j,i),4)<j)
                final(labeled(j,i),4)=j;
            end
        end
    end
end
        
        

end

